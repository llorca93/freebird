<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
    /**
     * @Route("/cart", name="cart")
     */
    public function index(): Response
    {
        $id = app.request.query.id
        $products = app.session.get('products');
        if ($id != null) {
            array_push($products, $id);
            app.session.set('products', array_unique($products));
        }
        return $this->render('cart/index.html.twig', [
            'products' => $products,
        ]);
    }

    /**
     * @Route("/cart/add-{id}", name="cart_add")
     */
    public function add($id, SessionInterface $session)
    {
        
    }
}
