<?php


namespace App\Message;


use App\Entity\User;
use App\Entity\Message;

use Doctrine\ORM\EntityManagerInterface;
use Tightenco\Collect\Support\Collection;



abstract class AbstractMessage
{


    /**
     * @var EntityManagerInterface
     */
    private $entityManager;


    public function __construct(EntityManagerInterface $entityManager)
    {

        $this->entityManager = $entityManager;
    }

    /**
     * Génère l'envoi d'une Message aux utilisateurs d'un même ROLE.
     * @param Message $Message
     * @param User $user
     * @return bool
     */
    protected function sendByPublish(Message $Message, User $user): bool
    {
        # Récupération des utilisateurs à notifier via le role
        $Message->setUser($user);
        $this->entityManager->persist($Message);
        $this->entityManager->flush();

        return true;
    }

    /**
     * Génère l'envoi d'une Message aux utilisateurs d'un même ROLE.
     * @param Message $Message
     * @param string $role
     * @return bool
     */
    protected function sendByRole(Message $Message, string $role = 'ROLE_ADMIN'): bool
    {
        # Récupération des utilisateurs à notifier via le role
        $users = $this->entityManager->getRepository(User::class)
            ->findByRole($role);

        foreach ($users as $user) {

            $Message->setUser($user);
            $this->entityManager->persist($Message);
            $this->entityManager->flush();

            // $this->mailjet->sendMessageEmail($user, $Message);
        }

        return true;
    }


    /**
     * Génère l'envoi d'une Message aux utilisateurs d'un même ROLE.
     * @param Message $Message
     * @param array $roles
     * @param string $content
     * @return bool
     */
    protected function sendByRoles(Message $Message, array $roles, string $content): bool
    {
        # Récupération des utilisateurs à notifier via le role
        $users = [];

        foreach ($roles as $role) {
            $users[] =  $this->entityManager->getRepository(User::class)->findByRole($role);
        }

        $users = new Collection($users);
        $users = $users->flatten();
        $users->all();


        foreach ($users as $user) {
            if (in_array('ROLE_ADMIN', $user->getRoles())) {
                $Message->setUser($user);
                $this->entityManager->persist($Message);
            } else {
                $Message->setUser($user);
                $this->entityManager->persist($Message);
            }
            $this->entityManager->flush();
        }

        // $this->mailjet->sendPublicationRequestEmail($emails, $Message, $emailsAdmin, $content);

        return true;
    }
}