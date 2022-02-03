<?php


namespace App\Controller;

use App\Entity\Notification;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * Class NotificationController
 * @package App\Controller\Dashboard
 * @Route("/dashboard/notification")
 */
class NotificationController extends AbstractController
{
    private $doctrine;

    public function __construct(EntityManagerInterface $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    /**
     * Suppresssion de toute les notifications
     * @Route("/clear_notifications_all", name="notification_clear_all",methods={"GET"})
     * @param Notification $notification
     * @param Request $request
     * @return Response
     */
    public function clearNotificationAll(Request $request): Response
    {
        foreach ($this->getUser()->getNotifications() as $notification) {
            $this->doctrine->remove($notification);
            $this->doctrine->flush();
        }

        return $this->redirect($request->get('redirect') ?? '/');
    }

    /**
     * Suppresssion d'une notification
     * @Route("/{id}/clear", name="notification_clear",methods={"GET"})
     * @param Notification $notification
     * @param Request $request
     * @return Response
     */
    public function clearNotification(Notification $notification, Request $request): Response
    {
        $em = $this->doctrine;
        $em->remove($notification);
        $em->flush();

        return $this->redirect($request->get('redirect') ?? '/');
    }
}
