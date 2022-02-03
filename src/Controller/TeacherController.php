<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Repository\CalendarRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TeacherController extends AbstractController
{
    /**
     * @Route("/teacher", name="teacher")
     */
    public function TeacherDashboard(UserRepository $userRepository, CalendarRepository $calendarRepository, CalendarRepository $remunerartionRepository): Response
    {
        

        $stats = [
            // recuperation du nombre de dates par mois
            'totalCalendarForTeacher' => $calendarRepository->findStats($this->getUser()->getId()),
            'totalRemunerationForTeacherByMonth' => $remunerartionRepository->totalRemunerationForTeacherByMonth($this->getUser()->getId()),
            'totalRemunerationForByMonth' => $remunerartionRepository->totalRemunerationForMonth($this->getUser()->getId())

        ];

        $teachers = $userRepository->findBySession('ROLE_TEACHER', $this->getUser()->getSession());
        $students = $userRepository->findBySession('ROLE_USER', $this->getUser()->getSession());
        $admins = $userRepository->findBySession('ROLE_ADMIN', $this->getUser()->getSession());
        return $this->render('dashboard/teachers-dashboard.html.twig', [
            'stats' => $stats,
            'admins' => $admins,
            'teachers' => $teachers,
            'students' => $students,
        ]);
    }

    /**
     * @return Response
     */
    public function sideBar(UserRepository $userRepository): Response
    {


        $teachers = $userRepository->findBySession('ROLE_TEACHER', $this->getUser()->getSession());
        $students = $userRepository->findBySession('ROLE_USER', $this->getUser()->getSession());


        return $this->render('components/_vertical-menu-teacher.html.twig', [
            'teachers' =>  $teachers,
            'students' => $students

        ]);
    }
}
