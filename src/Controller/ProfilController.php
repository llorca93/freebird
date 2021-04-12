<?php

namespace App\Controller;

use App\Form\ProfilType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProfilController extends AbstractController
{
    #[Route('/compte_infos_personnelles', name: 'compte_infos_personnelles')]
    public function index(): Response
    {   
        
        return $this->render('profil/profil.html.twig', [
            'profil' => 'ProfilController',
        ]);
    }
<<<<<<< HEAD


=======
   
    
>>>>>>> 835a038595ad36b39e0d4b7d2dc456037a3a4456
    
    #[Route('/compte_infos_personnelles/update-{id}', name: 'compte_infos_personnelles_update')]
       
    public function updateCustomer (UserRepository $userRepository, $id, Request $request)
    {
        $customer = $userRepository->find($id);
        $form = $this->createForm(ProfilType::class, $customer);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($customer);
            $manager->flush();

            $this->addFlash('success', 'vos données personnelles ont été bien modifiées');
            return $this->redirectToRoute('compte_infos_personnelles');

        }
        return $this->render('profil/profilForm.html.twig', [
            'profilForm' => $form->createView()
        ]);
    }





}

