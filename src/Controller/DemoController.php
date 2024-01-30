<?php

namespace App\Controller;

use App\Service\SlugService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    #[Route('/demo', name: 'app_demo')]
    public function index(SlugService $slugService): Response
    {
        $result = $slugService -> makeSlug('Wôrķšƥáçè ~~sèťtïñğš~~');

        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
            'result' => $result,
        ]);
    }
}
