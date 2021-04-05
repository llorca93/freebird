<?php

namespace App\Controller;

use App\Controller\UserController;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    #[Route('/admin/users', name: 'admin_users')]
    public function index(UserRepository $userRepository): Response
    {
        $customers = $userRepository->findAll();
        return $this->render('admin/users.html.twig', [
            'customers' => $customers,
        ]);
    }
}
