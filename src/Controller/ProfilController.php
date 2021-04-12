<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    #[Route('/profil', name: 'profil')]
    public function index(UserRepository $userRepository , $id , Request $request): Response
    {
        $profil = $userRepository->find($id);
        return $this->render('profil/index.html.twig', [
            'profil' =>$profil
        ]);
    }
   
    
    
}
