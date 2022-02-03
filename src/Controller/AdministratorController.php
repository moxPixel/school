<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Course;
use App\Entity\Session;
use App\Entity\Calendar;
use App\Service\Mailjet;
use App\Form\EditSessionType;
use App\Form\EditCalendarType;
use App\Form\AdminEditUserType;
use App\Repository\UserRepository;
use App\Form\EditLanguageCategoryType;
use App\Repository\CalendarRepository;
use App\Notification\NotificationService;
use App\Entity\LanguageProgramationCategory;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class AdministratorController extends AbstractController
{


    private $notificationService;
    private $mailjet;
    private $doctrine;
    public function __construct(NotificationService $notificationService, Mailjet $mailjet, EntityManagerInterface $doctrine)
    {
        $this->notificationService = $notificationService;
        $this->mailjet = $mailjet;
        $this->doctrine = $doctrine;
    }

    /**
     * Dashboard administrateur
     * @Route("/admin", name="administrator")
     */
    public function AdminDashboard(UserRepository $userRepository, CalendarRepository $calendarRepository): Response
    {
        $users = $this->doctrine->getRepository(User::class)->findBy([], ['id' => 'DESC']);
        $usersCheaking = $this->doctrine->getRepository(User::class)->findBy(['checking' => 0]);
        $userForRoles = $userRepository->findByRoleGroup();
        $calendarByMonth = $calendarRepository->findCalendarForMonth();
        $userByMonth = $userRepository->findUserByMonth();
        $allCalendar = $this->doctrine->getRepository(Calendar::class)->findBy([], ['id' => 'DESC']);


        return $this->render('dashboard/admins-dashboard.html.twig', [
            'userForRoles' => $userForRoles,
            'users' => $users,
            'usersCheck' => $usersCheaking,
            'calendarByMonth' => $calendarByMonth,
            'userByMonth' => $userByMonth,
            'allCalendar' => $allCalendar

        ]);
    }


    /**
     * Sidebar administrateur
     * @return Response
     */
    public function sideBar(CalendarRepository $calendarRepository): Response
    {

        $cours = $this->doctrine->getRepository(Course::class)->findBy([], ['id' => 'DESC']);
        $session = $this->doctrine->getRepository(Session::class)->findBy([], ['id' => 'DESC']);
        $technology = $this->doctrine->getRepository(LanguageProgramationCategory::class)->findBy([], ['id' => 'DESC']);
        $calendarByMonth = $calendarRepository->findCalendarForMonth();
        $calendarTotal = $calendarRepository->totalcalendar();
        $users = $this->doctrine->getRepository(User::class)->findBy([], ['id' => 'DESC']);



        return $this->render('components/_vertical-menu-admin.html.twig', [
            'users' => $users,
            'calendarByMonth' => $calendarByMonth,
            'calendarTotal' => $calendarTotal,
            'sessions' => $session,
            'technologies' => $technology,
            'cours' => $cours

        ]);
    }

    /**
     * tableaux de tout les utilisateurs
     * @Route("/admin/view-users", name="view-users")
     */
    public function viewUsers(): Response
    {
        $users = $this->doctrine->getRepository(User::class)->findBy([], ['id' => 'DESC']);

        return $this->render('school/course/admin/view-user.html.twig', [
            'users' => $users,

        ]);
    }

    /**
     * tableaux de toutes les sessions
     * @Route("/admin/view-sessions", name="view-sessions")
     */
    public function viewSessions(): Response
    {
        $session = $this->doctrine->getRepository(Session::class)->findBy([], ['id' => 'DESC']);

        return $this->render('school/course/admin/view-session.html.twig', [
            'sessions' => $session,

        ]);
    }

    /**
     * tableaux de toutes les dates
     * @Route("/admin/view-calendar", name="view-calendar")
     */
    public function viewCalendar(): Response
    {

        $calendar = $this->doctrine->getRepository(Calendar::class)->findBy([], ['id' => 'DESC']);

        return $this->render('school/course/admin/view-calendar.html.twig', [
            'calendars' => $calendar,

        ]);
    }

    /**
     * tableaux de tout les cours
     * @Route("/admin/view-cours", name="view-course")
     */
    public function viewCourse(): Response
    {


        $course = $this->doctrine->getRepository(Course::class)->findBy([], ['id' => 'DESC']);

        return $this->render('school/course/admin/view-course.html.twig', [
            'course' => $course,

        ]);
    }


    /**
     * tableaux de toute les technologies
     * @Route("/admin/view-technologies", name="view-technologies")
     */
    public function viewTechnologies(): Response
    {


        $technologies = $this->doctrine->getRepository(LanguageProgramationCategory::class)->findBy([], ['id' => 'DESC']);

        return $this->render('school/course/admin/view-technologies.html.twig', [
            'technologies' => $technologies,

        ]);
    }


    /**
     * Edition utlisateur
     * @Route("/admin/edit-user/{id}", name="admin_user_edit",methods={"GET|POST"})
     */
    public function editUser(User $user, Request $request, SluggerInterface $slugger): Response
    {

        $form = $this->createForm(AdminEditUserType::class, $user);
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
                    $user[0]->setPicture($newFilename);
                }
            }
            $em = $this->doctrine;
            $em->persist($user);
            $em->flush();
            $this->redirectToRoute('admin_user_edit');
        }
        return $this->render('school/course/admin/edit-user.html.twig', [
            'form' => $form->createView(),
            'user' => $user
        ]);
    }


    /**
     * Edition d'une technologie
     * @Route("/admin/technologie/{id}/edit", name="technologies_edit",methods={"GET|POST"})
     * @param LanguageProgramationCategory $LanguageProgramationCategory
     * @param Request $request
     * @return Response
     */
    public function editTechnoLanguage($id, Request $request, SluggerInterface $slugger): Response
    {

        $techno = $this->doctrine->getRepository(LanguageProgramationCategory::class)->findBy(['id' => $id]);

        $form = $this->createForm(EditLanguageCategoryType::class, $techno[0]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $technoPicture = $form->get('picture')->getData();

            // this condition is needed because the 'avatar' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($technoPicture) {
                $originalFilename = pathinfo($technoPicture->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $technoPicture->guessExtension();

                // Move the file to the directory where avatars are stored
                try {
                    $technoPicture->move(
                        $this->getParameter('technoPic'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'technoPicturename' property to store the PDF file name
                // instead of its contents
                if ($form->get('picture')->getData()) {
                    $techno[0]->setPicture($newFilename);
                }
            }
            $em = $this->doctrine;
            $em->persist($techno[0]);
            $em->flush();

            $this->addFlash('success', 'Technologie modifier !');
        }

        return $this->render('school/course/admin/edit-languageCategory.html.twig', [
            'form' => $form->createView(),
            'techno' => $techno[0]

        ]);
    }


    /**
     * Edition d'une date
     * @Route("/admin/calendar/{id}/edit", name="calendar_edit",methods={"GET|POST"})
     * @param Calendar $Calendar
     * @param Request $request
     * @return Response
     */
    public function editCalendar($id, Request $request): Response
    {

        $calendar = $this->doctrine->getRepository(Calendar::class)->findBy(['id' => $id]);

        $form = $this->createForm(EditCalendarType::class, $calendar[0]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->get('teacher')->getData();
            $newCategoryLanguage = $form->get('category')->getData()->getName();
            $newStart = $form->get('start')->getData();
            $newSession = $form->get('session')->getData()->getName();
            $newEnd = $form->get('end')->getData();
            $em = $this->doctrine;
            $em->persist($calendar[0]);
            $em->flush();
            $this->notificationService->sendNotification(" Nouvelle intervention du : " . date_format($newStart, 'd-m-y') . " Au " . date_format($newEnd, 'd-m-y.'), $user);
            $this->mailjet->sendEmail($user, "Votre planning vien d'etre mis à jour. Nouvelle intervention sur " . $newCategoryLanguage . " du : " . date_format($newStart, 'd-m-y') . " Au " . date_format($newEnd, 'd-m-y.') . " Numero de session " . $newSession . ".");
            $this->addFlash('success', 'Calendrier modifier !');
        }


        return $this->render('school/course/admin/edit-calendar.html.twig', [
            'form' => $form->createView(),
            'calendar' => $calendar[0]

        ]);
    }

    /**
     * Edition d'une session
     * @Route("/admin/session/{id}/edit", name="session_edit",methods={"GET|POST"})
     * @param Session $Session
     * @param Request $request
     * @return Response
     */
    public function editSession(Session $session, Request $request): Response
    {

  

        $form = $this->createForm(EditSessionType::class, $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->doctrine;
            $em->persist($session);
            $em->flush();
            $this->redirectToRoute('administrator');
            $this->addFlash('success', 'Technologie modifier !');
        }


        return $this->render('school/course/admin/edit-session.html.twig', [
            'form' => $form->createView(),
            'session' => $session[0]

        ]);
    }



    /**
     * Suppresssion d'un utilisateur
     * @Route("/admin/user/{id}/clear", name="user_clear",methods={"GET"})
     * @param User $User
     * @param Request $request
     * @return Response
     */
    public function clearUser(User $User, Request $request): Response
    {
        $em = $this->doctrine;
        $em->remove($User);
        $em->flush();

        return $this->redirect($request->get('redirect') ?? '/');
    }



    /**
     * Suppresssion d'un cours
     * @Route("/admin/course/{id}/course/clear", name="course_clear",methods={"GET"})
     * @param Course $Course
     * @param Request $request
     * @return Response
     */
    public function clearCourse(Course $Course, Request $request): Response
    {
        $em = $this->doctrine;
        $em->remove($Course);
        $em->flush();

        return $this->redirect($request->get('redirect') ?? '/');
    }

    /**
     * Suppresssion d'une session
     * @Route("/admin/session/{id}/clear", name="session_clear",methods={"GET"})
     * @param Session $Session
     * @param Request $request
     * @return Response
     */
    public function clearSession(Session $Session, Request $request): Response
    {
        $em = $this->doctrine;
        $em->remove($Session);
        $em->flush();

        return $this->redirect($request->get('redirect') ?? '/');
    }

    /**
     * Suppresssion d'une date
     * @Route("/admin/calendar/{id}/calendar/clear", name="calendar_clear",methods={"GET"})
     * @param Calendar $Calendar
     * @param Request $request
     * @return Response
     */
    public function clearCalendar(Calendar $Calendar, Request $request): Response
    {
        $em = $this->doctrine;
        $em->remove($Calendar);
        $em->flush();

        return $this->redirect($request->get('redirect') ?? '/');
    }
}
