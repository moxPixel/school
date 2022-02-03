<?php


namespace App\Message;


use App\Entity\User;
use App\Entity\Message;
use App\Message\AbstractMessage;


class MessageService extends AbstractMessage
{
    /**
     * @param string $message
     * @param User $user
     * @param string $link
     * @return bool
     * # TODO Remplacer l'URL en dur via .env
     */
    public function sendPublish(string $message, User $user, string $link = 'https://secure.unlock.com'): bool
    {
        # Création d'une Message
        $Message = Message::create($message, $link);

        # Envoi de la Message
        return $this->sendByPublish($Message, $user);
    }
    /**
     * @param string $message
     * @param string $link
     * @param string $role
     * @return bool
     * # TODO Remplacer l'URL en dur via .env
     */
    public function send(string $message, string $role = 'ROLE_ADMIN', string $link =  'https://secure.unlock.com'): bool
    {
        # Création d'une Message
        $Message = Message::create($message, $link);

        # Envoi de la Message
        return $this->sendByRole($Message, $role);
    }

    /**
     * @param string $message
     * @param array $roles
     * @param string $content
     * @param string $link
     * @return bool
     */
    public function sendForRoles(string $message, string $content, array $roles = ['ROLE_ADMIN'], string $link =  'https://secure.unlock.com'): bool
    {
        # Création d'une Message
        $Message = Message::create($message, $link);

        # Envoi de la Message
        return $this->sendByRoles($Message, $roles, $content);
    }

    
}