<?php

namespace App\Controller;

use App\Form\UserType;
use App\Controller\UserController;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * @Route("/admin/users", name="admin_users")
     */
    public function index(UserRepository $userRepository): Response
    {
        $customers = $userRepository->findAll();
        return $this->render('admin/users.html.twig', [
            'customers' => $customers,
        ]);
    }
    
    // /**
    //  * @Route("/admin/users/-{id}", name="admin_users_id")
    //  */
    // public function showOneCustomer(UserRepository $userRepository, $id, Request $request): Response
    // {
    //     $customer = $UserRepository->find($id);
    //     return $this->render("admin/users.html.twig" . $id, [
    //         'customer' => $customer,
    //     ]);
    // }

    /**
     * @Route ("/admin/users/update-{id}", name="admin_user_update")
     */
    public function updateCustomer (UserRepository $userRepository, $id, Request $request)
    {
        $customer = $userRepository->find($id);
        $form = $this->createForm(UserType::class, $customer);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($customer);
            $manager->flush();

            $this->addFlash('success', 'Le User a été bie modifié');
            return $this->redirectToRoute('admin_users');

        }
        return $this->render('admin/userForm.html.twig', [
            'userForm' => $form->createView()
        ]);
    }
}


