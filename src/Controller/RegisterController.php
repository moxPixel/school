<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\Mailjet;
use App\Form\RegisterType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Notification\NotificationService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class RegisterController extends AbstractController
{
    private $passwordEncoder;
    private $notificationService;
    private $doctrine;
    private $mailjet;
    
    public function __construct(UserPasswordHasherInterface $passwordEncoder, NotificationService $notificationService, Mailjet $mailjet, EntityManagerInterface $doctrine)
    {
        $this->doctrine = $doctrine;
        $this->passwordEncoder = $passwordEncoder;
        $this->notificationService = $notificationService;
        $this->mailjet = $mailjet;
    }
    /**
     * Enregitrement d'un utilisateur
     * @Route("/admin/register", name="register")
     * @param NotificationService $notificationService
     * @param User $user
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function register(Request $request, SluggerInterface $slugger, UserRepository $userRepository): Response
    {
        $admins =   $userRepository->findByRole('ROLE_ADMIN');
        $teachers = $userRepository->findByRole('ROLE_TEACHER');
        $students = $userRepository->findByRole('ROLE_USER');
        $temporaryPassword = $this->passwordAleatory(10);

        $user = new User();
        $users = $this->doctrine->getRepository(User::class)->findAll();

        $form = $this->createForm(RegisterType::class, $user);
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
                $user->setPicture($newFilename);
            }
            $user->setPassword(
                $this->passwordEncoder->hashPassword($user, $temporaryPassword)
            );
            $em = $this->doctrine;
            $em->persist($user);
            $em->flush();

            $this->notificationService->sendNotification("Félicitation {$user->getFirstname()} ! Vous faite desormait partit de l'aventure.", $user);
            $this->mailjet->sendEmail($user, "Bienvenue chez Unlock formation, nous venons de vous créer un espace dedier. Vous y' trouvera votre tableau de bord personalisé ! voici votre mot de passe temporaire , gardez le precieusement : "   . $temporaryPassword);
            $this->redirectToRoute('dashboard_home');
            $this->addFlash('success', 'Nouvelle utilisateur ajouter !');
        }

        return $this->render('register/index.html.twig', [
            'form' => $form->createView(),
            'users' => $users,
            'admins' => $admins,
            'teachers' => $teachers,
            'students' => $students
        ]);
    }

    function passwordAleatory($nbChar)
    {
        $chaine = "mnoTUzS5678kVvwxy9WXYZRNCDEFrslq41GtuaHIJKpOPQA23LcdefghiBMbj0";
        srand((float)microtime() * 1000000);
        $pass = '';
        for ($i = 0; $i < $nbChar; $i++) {
            $pass .= $chaine[rand() % strlen($chaine)];
        }
        return $pass;
    }

    function passgen2($nbChar)
    {
        return substr(str_shuffle(
            'abcdefghijklmnopqrstuvwxyzABCEFGHIJKLMNOPQRSTUVWXYZ0123456789'
        ), 1, $nbChar);
    }
}
