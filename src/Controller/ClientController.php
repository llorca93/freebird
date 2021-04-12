<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController extends AbstractController
{
<<<<<<< HEAD
    #[Route('/compte', name: 'compte')]
=======
    /**
     * @Route("/client", name="client")
     */
    #[Route('/client', name: 'client')]
>>>>>>> 835a038595ad36b39e0d4b7d2dc456037a3a4456
    public function index(): Response
    {
        return $this->render('client/index.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
}
