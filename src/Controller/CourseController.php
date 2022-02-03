<?php

namespace App\Controller;

use App\Entity\User;
use Twig\Environment;
use App\Entity\Course;
use App\Entity\Rating;
use App\Form\NoteType;
use DateTimeImmutable;
use App\Entity\Session;
use App\Entity\Calendar;
use App\Form\CourseType;
use App\Service\Mailjet;
use App\Form\SessionType;
use App\Form\CalendarType;
use App\Entity\Remuneration;
use App\Form\RemunerationType;
use App\Form\LanguageCategoryType;
use Doctrine\ORM\EntityManagerInterface;
use App\Notification\NotificationService;
use App\Entity\LanguageProgramationCategory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class CourseController extends AbstractController
{


    /**
     * @var EntityManagerInterface
     */
    private $twig;
    private $doctrine;
    private $mailjet;

    public function __construct(Environment $twig, EntityManagerInterface $doctrine, Mailjet $mailjet, NotificationService $notificationService)
    {
        $this->doctrine = $doctrine;
        $this->mailjet = $mailjet;
        $this->notificationService = $notificationService;
        $this->twig = $twig;
    }


    /**
     * Renvoi les categories des cours
     *@Route("/cours", name="course")
     */
    public function allCourseCategory(): Response
    {
        $languageCategory = $this->doctrine->getRepository(LanguageProgramationCategory::class)->findAll();
        return $this->render('school/course/course.html.twig', [
            'categoryLanguage' =>  $languageCategory,
        ]);
    }


    /**
     * Renvoi tout les cours associer à la categorie
     * @Route("/cours/{id}/", name="single_course")
     * @return Response
     */
    public function viewCourse($id): Response
    {
        $courses = $this->doctrine->getRepository(Course::class)->findBy(['category' => $id]);

        return $this->render('school/course/course-details.html.twig', [
            'courses' => $courses,
        ]);
    }


    /**
     * Ajout d'un cours
     * @return Response
     */
    public function addCourse(Request $request, SluggerInterface $slugger): Response
    {

        $course = new Course();

        $form = $this->createForm(CourseType::class, $course);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $courseFile = $form->get('link')->getData();

            // this condition is needed because the 'avatar' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($courseFile) {
                $originalFilename = pathinfo($courseFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $courseFile->guessExtension();

                // Move the file to the directory where avatars are stored
                try {
                    $courseFile->move(
                        $this->getParameter('courseFile'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'courseFilename' property to store the PDF file name
                // instead of its contents
                $course->setLink($newFilename);
            }


            $em = $this->doctrine;
            $em->persist($course);
            $em->flush();
            $this->redirectToRoute('view-course');
            $this->addFlash('success', 'Nouveaux cours ajouter !');
        }

        return $this->render('school/course/admin/add-course.html.twig', [
            'form' =>  $form->createView(),
        ]);
    }


    /**
     * Ajout d'une note
     * @Route("/teacher/add-note", name="add_note")
     */
    public function addNote(Request $request): Response
    {

        $note = new Rating();

        $form = $this->createForm(NoteType::class, $note);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $form->get('user')->getData();
            $note->setUser($user);
            $note->setCreatedAt(new DateTimeImmutable());

            $em = $this->doctrine;
            $em->persist($note);
            $em->flush();

            // envoi d'un email et d'une notification
            $this->notificationService->sendNotification("Une nouvelle note concernant l'evaluation " . $note->getName() . " et disponible. Vous avez obtenue la note de " . $note->getNote() . "/20.", $user);
            $this->mailjet->sendEmail($user, "Votre formateur vien de vous attribué une nouvelle note concernant l'evaluation " . $note->getName() . ". Vous avez obtenu la note de " . $note->getNote() . "/20.");
            $this->redirectToRoute('teacher');
            $this->addFlash('success', 'Nouvelle note ajouter !');
        }

        return $this->render('school/course/teacher/add-note.html.twig', [
            'form' =>  $form->createView(),
        ]);
    }


    /**
     * Ajout d'une session
     * @return Response
     */
    public function addSession(Request $request): Response
    {

        $session = new Session();

        $form = $this->createForm(SessionType::class, $session);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $session->setCreatedAt(new DateTimeImmutable());

            $em = $this->doctrine;
            $em->persist($session);
            $em->flush();
            $this->redirectToRoute('view-sessions');
            $this->addFlash('success', 'Nouvelle session ajouter !');
        }

        return $this->render('school/course/admin/add-session.html.twig', [
            'form' =>  $form->createView(),
        ]);
    }


    /**
     * Ajout d'une technologie (Category)
     * @param Request $request
     * @return RedirectResponse|Response
     */
    public function addTechnoLanguage(Request $request, SluggerInterface $slugger): Response
    {

        $techno = new LanguageProgramationCategory();

        $form = $this->createForm(LanguageCategoryType::class, $techno);
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
                $techno->setPicture($newFilename);
            }
            $em = $this->doctrine;
            $em->persist($techno);
            $em->flush();
            $this->redirectToRoute('view-technologies');
            $this->addFlash('success', 'Nouvelle technologie ajouter !');
        }

        return $this->render('school/course/admin/add-languageCategory.html.twig', [
            'form' => $form->createView(),

        ]);
    }


    /**
     * Vue du calendrier etudiant et formateur associer à la session de celui ci
     * @return Response
     */
    public function calendar(): Response
    {
        $users  = $this->doctrine->getRepository(User::class)->findBy(['session' => $this->getUser()->getSession()]);
        $calendar = $this->doctrine->getRepository(Calendar::class)->findBy(['session' => $this->getUser()->getSession()]);
        $calendarTeacher = $this->doctrine->getRepository(Calendar::class)->findBy(['teacher' => $this->getUser()]);
        return $this->render('school/course/calendar.html.twig', [
            'calendarTeacher' => $calendarTeacher,
            'calendar' => $calendar,
            'users' => $users

        ]);
    }


    /**
     * Ajout d'une date 
     */
    public function addCalendar(Request $request): Response
    {

        $calendar = new Calendar();

        $form = $this->createForm(CalendarType::class, $calendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $calendar->setCreatedAt(new DateTimeImmutable());

            $em = $this->doctrine;
            $em->persist($calendar);
            $em->flush();
            $this->redirectToRoute('view-calendar');
            $this->addFlash('success', 'Nouvelle date ajouter !');
        }

        return $this->render('school/course/admin/add-calendar.html.twig', [
            'form' =>  $form->createView(),
        ]);
    }

    /**
     * Ajout d'un tarif jr
     */
    public function addRemuneration(Request $request): Response
    {

        $remuneration = new Remuneration();

        $form = $this->createForm(RemunerationType::class, $remuneration);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->doctrine;
            $em->persist($remuneration);
            $em->flush();
            $this->redirectToRoute('dashboard_home');
            $this->addFlash('success', 'Nouveau tarif ajouter !');
        }

        return $this->render('school/course/admin/add-remuneration.html.twig', [
            'form' =>  $form->createView(),
        ]);
    }
}
