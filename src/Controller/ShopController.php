<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;

class ShopController extends AbstractController
{
    /**
     * @Route("/shop", name="shop")
     */
    public function index(Request $request,CategoryRepository $categoryRepository,ProductRepository $productRepository, $categoryId = null): Response
    {   
        $categories = $categoryRepository->findAll();
        $products;
        $categoryId = $request->query->get('categoryId');
        $category = null;
        if($categoryId) {
            $category = $categoryRepository->find($categoryId);
            $products = $productRepository->findByCategory($category);
        } else {
            $products = $productRepository->findAll();
        }
        
        return $this->render('shop/index.html.twig', [
            'controller_name' => 'ShopController',
            'categories' => $categories,
            'products' => $products,
            'category' => $category,
        ]);
    }
}

