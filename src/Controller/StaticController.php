<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StaticController extends AbstractController
{
    /**
    * @Route("/discovery", name="discovery")
     */
    public function discover(): Response
    {
        return $this->render('static/index.html.twig', [
            'controller_name' => 'StaticController',
        ]);    
    }

    /**
    * @Route("/about", name="about")
    */
    public function about(): Response
    {
        return $this->render('static/about.html.twig', [
            'controller_name' => 'StaticController',
        ]); ;    
    }

    /**
    * @Route("/cgv", name="cgv")
    */
    public function cgv(): Response
    {
        return $this->render('static/cgv.html.twig', [
            'controller_name' => 'StaticController',
        ]); ;    
    }

      /**
    * @Route("/cgu", name="cgu")
    */
    public function cgu(): Response
    {
        return $this->render('static/cgu.html.twig', [
            'controller_name' => 'StaticController',
        ]); ;    
    }

      /**
    * @Route("/mentions-legales", name="mentions-legales")
    */
    public function mentionsLegales(): Response
    {
        return $this->render('static/mentionsLegales.html.twig', [
            'controller_name' => 'StaticController',
        ]); ;    
    }

      /**
    * @Route("/politique-de-confidentialite", name="politique-de-confidentialite")
    */
    public function politiqueConf(): Response
    {
        return $this->render('static/politiqueDeConf.html.twig', [
            'controller_name' => 'StaticController',
        ]); ;    
    }




}