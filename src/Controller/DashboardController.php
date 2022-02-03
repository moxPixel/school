<?php

namespace App\Controller;

use App\Form\IsReadType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class DashboardController
 * @package App\Controller\Dashboard
 */
class DashboardController extends AbstractController
{

    /**
     * @Route("/dashboard", name="dashboard_home")
     */
    public function redirectByRoles(): Response
    {
        $roles = $this->getUser()->getRole();

        switch ($roles) {
            case "Administrateur":
                return $this->redirectToRoute('administrator');
                break;
            case "Formateur":
                return $this->redirectToRoute('teacher');
                break;
            case "Eleve":
                return $this->redirectToRoute('student');
                break;
        }
    }

    /**
     * Renvoi le champ de presence utilisateur
     * @return Response
     */
    public function sideBarChecking(): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(IsReadType::class, $user);

        return $this->render('components/_checking.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
