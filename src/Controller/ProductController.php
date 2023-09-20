<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/products', name: 'app_product')]
    public function listProducts(): Response
    {
        return $this->render('products/list.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    #[Route("/product/{id}", name: "product_view")]
    public function viewProduct(Request $request, $id): Response
    {
        return $this->render('products/view.html.twig', [
            'controller_name' => 'ProductController',
            'title' => 'Affichage du produit ' . $id,
        ]);
    }
}
