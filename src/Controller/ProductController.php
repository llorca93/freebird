<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    /**
     * @Route("/admin/product", name="admin_product")
     */
    public function index(ProductRepository $productRepository): Response
    {
        $products = $productRepository->findAll();
        return $this->render('admin/product.html.twig', [
            'products' => $products,
        ]);
    }

    /**
     * @Route("/admin/product/create", name="admin_product_create")
     */
    public function createProduct(Request $request)
    {
         
         $product = new Product();
         $form = $this->createForm(ProductType::class, $product); 
         $form->handleRequest($request);
 
         
         if ($form->isSubmitted()) {
             if ($form->isValid()) {
                 $infoImg1 = $form['img1']->getData(); 
                 $extensionImg1 = $infoImg1->guessExtension(); 
                 $nomImg1 = time() . '-1.' . $extensionImg1; 
                 $infoImg1->move($this->getParameter('dossier_photos_products'), $nomImg1); 
                 $product->setImg1($nomImg1); 
                 
                 $infoImg2 = $form['img2']->getData(); 
                 if ($infoImg2 !== null) {
                     $extensionImg2 = $infoImg2->guessExtension(); 
                     $nomImg2 = time() . '-2.' . $extensionImg2; 
                     $infoImg2->move($this->getParameter('dossier_photos_products'), $nomImg2); 
                     $product->setImg2($nomImg2); 
                 } else {
 
                     $product->setImg2(null); 
                 }

                 $infoImg3 = $form['img3']->getData(); 
                 if ($infoImg3 !== null) {
                     $extensionImg3 = $infoImg3->guessExtension(); 
                     $nomImg3 = time() . '-3.' . $extensionImg3; 
                     $infoImg3->move($this->getParameter('dossier_photos_products'), $nomImg3); 
                     $product->setImg2($nomImg3); 
                 } else {
 
                     $product->setImg3(null); 
                 }


 
                 
                 $manager = $this->getDoctrine()->getManager();
                 $manager->persist($product); 
                 $manager->flush(); 
                 $this->addFlash('success','Le produit a bien été ajoutée');
                 
             } else {
                 $this->addFlash('danger', 'Une erreur est survenue lors de l\'ajout du produit');
             }
         }
 
         return $this->render('admin/productForm.html.twig', [
             'productForm' => $form->createView(),
 
 
         ]);
    }

    /**
     * @Route("/admin/product/update-{id}", name="admin_product_update")
     */
    public function updateProduct(ProductRepository $productRepository, $id, Request $request)
    {
        $product = $productRepository->find($id);
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) { 

            $infoImg1 = $form['img1']->getData();
            $nomOldImg1 = $product->getImg1();
            if ($infoImg1 !== null) {
                
                $cheminImg1 = $this->getParameter('dossier_photos_products') . '/' . $nomOldImg1;
                
                if (file_exists($cheminImg1)) {
                    unlink($cheminImg1);
                }
                $extensionImg1 = $infoImg1->guessExtension(); 
                $nomImg1 = time() . '-1.' . $extensionImg1; 
                $infoImg1->move($this->getParameter('dossier_photos_products'), $nomImg1); 
                $product->setImg1($nomImg1); 
            } else {
                $product->setImg1($nomOldImg1);
                

            }

            $infoImg2 = $form['img2']->getData();
            $nomOldImg2 = $product->getImg2();
            if ($infoImg2 !== null) {
                if ($nomOldImg2 !== null) {
                    $cheminOldimg2 = $this->getParameter('dossier_photos_products') . '/' . $nomOldImg2;
                   if (file_exists($cheminOldimg2)) {
                       unlink($cheminOldimg2);
                   }
                }
                $extensionImg2 = $infoImg2->guessExtension(); 
                $nomImg2 = time() . '-2.' . $extensionImg2; 
                $infoImg2->move($this->getParameter('dossier_photos_products'), $nomImg2); 
                $product->setImg2($nomImg2); 

                
            } else {
                $product->setImg2($nomOldImg2);
            }

            $infoImg3 = $form['img3']->getData();
            $nomOldImg3 = $product->getImg3();
            if ($infoImg3 !== null) {
                if ($nomOldImg3 !== null) {
                    $cheminOldimg3 = $this->getParameter('dossier_photos_products') . '/' . $nomOldImg3;
                   if (file_exists($cheminOldimg3)) {
                       unlink($cheminOldimg3);
                   }
                }
                $extensionImg3 = $infoImg3->guessExtension(); 
                $nomImg3 = time() . '-3.' . $extensionImg3; 
                $infoImg3->move($this->getParameter('dossier_photos_products'), $nomImg3); 
                $product->setImg3($nomImg3); 

                
            } else {
                $product->setImg3($nomOldImg3);
            }

            

            $manager = $this->getDoctrine()->getManager();
            $manager->persist($product);
            $manager->flush();
            $this->addFlash('success','Le produit a bien été modifié');
            return $this->redirectToRoute('admin_product');
        
        
        
        
        

        }

        return $this->render('admin/productForm.html.twig', [
            'productForm' => $form->createView(),
        ]);
    }


    /**
     * @Route("/admin/product/delete-{id}", name="admin_product_delete")
     */
    public function deleteProduct(ProductRepository $productRepository, $id)
    {
        $product = $productRepository->find($id);

        $nomImg1 = $product->getImg1();
        if ($nomImg1 !== null) {
            $cheminImg1 = $this->getParameter('dossier_photos_products') . '/' . $nomImg1;
            if (file_exists($cheminImg1)) {
            unlink($cheminImg1);
            }
        }

        $product = $productRepository->find($id); 
        $nomImg2 = $product->getImg2();
        if ($nomImg2 !== null) {
            $cheminImg2 = $this->getParameter('dossier_photos_products') . '/' . $nomImg2;
            if (file_exists($cheminImg2)) {
            unlink($cheminImg2);
            }
        }

        $product = $productRepository->find($id); 
        $nomImg3 = $product->getImg3();
        if ($nomImg3 !== null) {
            $cheminImg3 = $this->getParameter('dossier_photos_products') . '/' . $nomImg3;
            if (file_exists($cheminImg3)) {
            unlink($cheminImg3);
            }
        }

        $manager = $this->getDoctrine()->getManager();
        $manager->remove($product);
        $manager->flush();
        $this->addFlash('success','Le produit a bien été supprimé');

        return $this->redirectToRoute('admin_product');
    }
}
