<?php

namespace App\Controller;

use App\Entity\Order;
use App\Form\OrderType;
use App\Repository\OrderRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderController extends AbstractController
{
    /**
     * @Route("/admin/orders", name="admin_orders")
     */
    public function index(OrderRepository $orderRepository): Response
    {
        $orders = $orderRepository->findAll();
        return $this->render('admin/orders.html.twig', [
            'orders' => $orders,
        ]);
    }

    /**
     * @Route("/admin/orders/update-{id}", name="admin_orders_update")
     */
    public function updateOrder(OrderRepository $orderRepository, $id, Request $request)
    {
        $order = $orderRepository->find($id);
        $form = $this->createForm(OrderType::class, $order);
        $form->handleRequest($request);

        if ($form->isSubmitted && $form->isValid) {
            
            $manager = $this->getDoctrine()->getManager();
            $manager->persist($order);
            $manager->flush();
            $this->addFlash('success','La commande a bien été modifiée');
            return $this->redirectToRoute('admin_product');
        }

        return $this->render('admin/orderForm.html.twig', [
            'orderForm' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/orders/delete-{id}", name="admin_orders_delete")
     */
    public function deleteOrder(OrderRepository $orderRepository, $id)
    {
        $order = $orderRepository->find($id);
        $manager = $this->getDoctrine()->getManager();
        $manager->remove($order);
        $manager->flush();

        $this->addFlash('success','Le produit a bien été supprimé');

        return $this->redirectToRoute('admin_orders');

    }
}
