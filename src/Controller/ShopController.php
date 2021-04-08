<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;


class ShopController extends AbstractController
{
    /**
     * @Route("/shop", name="shop")
     */
    public function index(CategoryRepository $categoryRepository,ProductRepository $productRepository): Response
    {   
        $categories = $categoryRepository->findAll();
        $products = $productRepository->findAll();
        return $this->render('shop/index.html.twig', [
            'controller_name' => 'ShopController',
            'categories' => $categories,
            'products' => $products,
        ]);
    }
}
