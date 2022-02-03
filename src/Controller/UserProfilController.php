<?php

namespace App\Controller;

use App\Form\EditUserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

/**
 * Class DashboardController
 * @package App\Controller\UserProfil
 */
class UserProfilController extends AbstractController
{
    protected $requestStack;
    private $passwordEncoder;
    private $doctrine;
    
    public function __construct(UserPasswordHasherInterface $passwordEncoder, RequestStack $requestStack,EntityManagerInterface $doctrine)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->doctrine = $doctrine;
        $this->requestStack = $requestStack;
    }
    /**
     * @Route("/parametres", name="user_params")
     */
    public function parameters(Request $request, SluggerInterface $slugger): Response
    {


        $user = $this->getUser();

        $form = $this->createForm(EditUserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $avatarFile = $form->get('picture')->getData();

            // this condition is needed because the 'avatar' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($avatarFile) {
                $originalFilename = pathinfo($avatarFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $avatarFile->guessExtension();

                // Move the file to the directory where avatars are stored
                try {
                    $avatarFile->move(
                        $this->getParameter('avatar'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'avatarFilename' property to store the PDF file name
                // instead of its contents
                if ($form->get('picture')->getData()) {
                    $user->setPicture($newFilename);
                }
            }
            $user->setPassword($this->passwordEncoder->hashPassword($user, $user->getPassword()));


            $em = $this->doctrine;
            $em->persist($user);
            $em->flush();
        }
        return $this->render('user_profile/parameters.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * Switch presence utilisateur Ajax
     * @Route("/post",name="chekingSwitch")
     */
    public function chekingSwitch(): Response
    {
        $user = $this->getUser();

        if (!$user) return $this->json([
            'Code' => 403,
            'message' => "Unauthorized access "
        ], 403);

        if ($user->getChecking() == false) {
            $user->setChecking(true);
            $em = $this->doctrine;
            $em->persist($user);
            $em->flush();
        } elseif ($user->getChecking() == true) {
            $user->setChecking(false);
            $em = $this->doctrine;
            $em->persist($user);
            $em->flush();
        }

        return $this->json(['Code' => 200, 'Message' => 'success'], 200);
    }


    /**
     * @Route("/documents", name="user_documents")
     */
    public function documents(): Response
    {

        return $this->render('user_profile/documents.html.twig', []);
    }
}
