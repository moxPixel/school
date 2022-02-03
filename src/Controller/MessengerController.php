<?php

namespace App\Controller;

use App\Entity\Message;
use App\Form\MessengerType;
use App\Message\MessageService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;


/**
 * @package App\Controller\Message
 * @Route("/dashboard")
 */
class MessengerController extends AbstractController
{
    private $doctrine;
    private $messageService;
    
    public function __construct(MessageService $messageService, EntityManagerInterface $doctrine)
    {
        $this->messageService = $messageService;
        $this->doctrine = $doctrine;
    }


    /**
     * Envoi d'un message
     * @return Response
     */
    public function sendMessage(Request $request, SluggerInterface $slugger): Response
    {
        $message = new Message();
        $form = $this->createForm(MessengerType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            if ($form->get('file')->getData()) {
                $jointFile = $form->get('file')->getData();

                // this condition is needed because the 'avatar' field is not required
                // so the PDF file must be processed only when a file is uploaded
                if ($jointFile) {
                    $originalFilename = pathinfo($jointFile->getClientOriginalName(), PATHINFO_FILENAME);
                    // this is needed to safely include the file name as part of the URL
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename . '-' . uniqid() . '.' . $jointFile->guessExtension();

                    // Move the file to the directory where avatars are stored
                    try {
                        $jointFile->move(
                            $this->getParameter('joint'),
                            $newFilename
                        );
                    } catch (FileException $e) {
                        // ... handle exception if something happens during file upload
                    }

                    // updates the 'avatarFilename' property to store the PDF file name
                    // instead of its contents

                    $message->setFile($newFilename);
                }
            }
            $message->setSender($this->getUser());
            $em = $this->doctrine;
            $em->persist($message);
            $em->flush();
            $this->addFlash('success', 'Message envoyer !');
        }

        return $this->render('messenger/messenger-form.html.twig', [
            'form' => $form->createView(),
        ]);
    }


    /**
     * Suppression de toutes les Messengers
     * @Route("messages/clear", name="messenger_clear_all", methods={"GET"})
     * @param Request $request
     * @param Message $Messenger
     * @return Response
     */
    public function clearMessageAll(Request $request): Response
    {
        foreach ($this->getUser()->getMessengers() as $Messenger) {
            $this->doctrine->remove($Messenger);
            $this->doctrine->flush();
        }

        return $this->redirect($request->get('redirect') ?? '/');
    }

    /**
     * Suppresssion d'un Messenge
     * @Route("message/{id}/clear", name="messenger_clear",methods={"GET"})
     * @param Message $Messenger
     * @param Request $request
     * @return Response
     */
    public function clearMessage(Message $Messenger, Request $request): Response
    {
        $em = $this->doctrine;
        $em->remove($Messenger);
        $em->flush();

        return $this->redirect($request->get('redirect') ?? '/dashboard');
    }



    /**
     * Vue d'un seul message
     * @Route("/messenger/{id}/", name="single_message")
     * @return Response
     */
    public function viewMessage($id): Response
    {

        $singleMessage = $this->doctrine->getRepository(Message::class)->findBy(['id' => $id]);
        $singleMessage[0]->setIsRead(true);

        $em = $this->doctrine;
        $em->persist($singleMessage[0]);
        $em->flush();

        return $this->render('components/_view_single_message.html.twig', [
            'singleMessage' => $singleMessage,
        ]);
    }
}
