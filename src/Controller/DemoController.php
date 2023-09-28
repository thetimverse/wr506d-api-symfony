<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\SlugService;

class DemoController extends AbstractController
{
    #[Route('/demo', name: 'app_demo')]
    public function index(SlugService $slug): Response
    {
        $result = $slug->makeSlug('Wôrķšƥáçè ~~sèťtïñğš~~');

        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
            'result' => $result,
        ]);
    }
}
