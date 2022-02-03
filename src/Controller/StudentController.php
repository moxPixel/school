<?php

namespace App\Controller;

use App\Entity\Rating;
use App\Repository\UserRepository;
use App\Repository\RatingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class StudentController extends AbstractController
{


    private $doctrine;

    public function __construct(EntityManagerInterface $doctrine)
    {

        $this->doctrine = $doctrine;
    }
    /**
     * Dashboard etudiant
     * @Route("/student", name="student")
     */
    public function StudentDashboard(RatingRepository $raitingRepository, UserRepository $userRepository): Response
    {
        // recuperation eleves et formateurs selon le numero de session de l'utilisateur connecter.
        $teachers = $userRepository->findBySession('ROLE_TEACHER', $this->getUser()->getSession());
        $students = $userRepository->findBySession('ROLE_USER', $this->getUser()->getSession());
        $admins = $userRepository->findBySession('ROLE_ADMIN', $this->getUser()->getSession());


        $stats = [
            // recuperation moyenne general par mois
            'totalAverageByMonth' => $raitingRepository->findStats($this->getUser()->getId()),
            // recuperation moyenne general 
            'totalAverageAll' => $raitingRepository->findTotal($this->getUser()->getId()),
            // recuperation moyenne general par language
            'totalAverageByCategory' => $raitingRepository->findTotalByCategory($this->getUser()->getId()),
            // recuperation des evaluations de l'utilisateur
            'totalEval'  => $this->doctrine->getRepository(Rating::class)->findBy(['user' => $this->getUser()]),
            // recuperation moyenne general par mois
            'totalAverageByClassRoom' => $raitingRepository->findTotalByClassRoom($this->getUser()->getSession()),
            // recuperation moyenne general par mois
            'totalAverageAllByClassRoom' => $raitingRepository->findTotalRatinsByClassRoom($this->getUser()->getSession()),
        ];

        return $this->render('dashboard/students-dashboard.html.twig', [
            'stats' => $stats,
            'teachers' => $teachers,
            'students' => $students,
            'admins' => $admins,
        ]);
    }


    /**
     * Sidebar Etudiant
     * @return Response
     */
    public function sideBar(): Response
    {
        return $this->render('components/_vertical-menu-student.html.twig', []);
    }
}
