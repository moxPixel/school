<?php

namespace App\Controller;

use App\Service\Mailjet;
use App\Form\ResetPasswordType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class SecurityController extends AbstractController
{

    private $passwordEncoder;
    private $doctrine;
    private $mailjet;

    public function __construct(UserPasswordHasherInterface $passwordEncoder, Mailjet $mailjet, EntityManagerInterface $doctrine)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->mailjet = $mailjet;
        $this->doctrine = $doctrine;
    }
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }


    /**
     * @Route("/resset-password", name="reset-password")
     */
    public function resetPassword(Request $request, UserRepository $userRepository): Response
    {


        $form = $this->createForm(ResetPasswordType::class);
        $form->handleRequest($request);
        $temporaryPassword = $this->passwordAleatory(10);

        if ($form->isSubmitted() && $form->isValid()) {

            $email = $form->get('email')->getData();
            $user = $userRepository->findByEmail($email);

            if ($user) {
                $user[0]->setPassword(
                    $this->passwordEncoder->hashPassword($user[0], $temporaryPassword)
                );

                $em = $this->doctrine;
                $em->persist($user[0]);
                $em->flush();

                $this->mailjet->sendEmail($user[0], "Nous venons de reinitialialis?? votre mot de passe, pensez ?? le modifier. Voici votre mot de passe temporaire , gardez le precieusement : "   . $temporaryPassword);
                $this->addFlash('success', 'Un email vien d\' etre envoyer ?? cette adresse !');
            } else {
                $this->addFlash('erreur', 'Ce compte n\'existe pas !');
            }
        }

        return $this->render('security/resset-password.html.twig', [
            'form' => $form->createView(),
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
