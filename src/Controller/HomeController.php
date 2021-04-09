<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    

    /**
     * @Route("/", name="home")
     */

    public function index(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();
        $stages = $productRepository->findByCategory(5);
        $baptemes = $productRepository->findByCategory(4);
        return $this->render('home/index.html.twig', [
            'products' => $products,
            'stages' => $stages,
            'baptemes' => $baptemes,
        ]);
    }
}
