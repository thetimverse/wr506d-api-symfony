<?php

namespace App\EventListener;

use Lexik\Bundle\JWTAuthenticationBundle\Event\AuthenticationSuccessEvent;
use Symfony\Component\Security\Core\User\UserInterface;

class AuthenticationSuccessListener
{
    /**
     
@param AuthenticationSuccessEvent $event*/
  public function onAuthenticationSuccessResponse(AuthenticationSuccessEvent $event): void{$data = $event->getData();$user = $event->getUser();

        if (!$user instanceof UserInterface) {
            return;
        }

        $mediaObject = $user->getIcon()->getFilePath();

        // Create an associative array for user data
        $userData = [
            'id' => $user->getId(),
            // 'username' => $user->getUsername(),
            'username' => $user->getEmail(),
            'icon' => $mediaObject,
            'roles' => $user->getRoles()
        ];

        // Add the userData array under the 'user' key
        $data['user'] = $userData;

        $event->setData($data);
    }
}