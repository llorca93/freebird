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


    /**
     * @Route("/admin/users/delete-{id}", name="admin_user_delete")
     */
    public function deleteCustomer (UserRepository $userRepository, $id)
    {
        $customer = $userRepository->find($id);
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($customer);
        $manager->flush();
        $this->addFlash('success', 'L\'utilisateur a bien été supprimé');
        return $this->redirectToRoute('admin_users');
    }
}


