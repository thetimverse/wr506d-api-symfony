<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class MeController
{
    #[Route('/api/me', name: 'app_demo', methods: 'GET')]
    public function getCurrentUser(UserInterface $user): JsonResponse
    {
        $mediaObject = $user->getIcon()->getFilePath();

        // Create an associative array for user data
        $userData = [
            'username' => $user->getEmail(),
            'email' => $user->getEmail(),
            'icon' => $mediaObject,
        ];

        return new JsonResponse($userData);
    }
}