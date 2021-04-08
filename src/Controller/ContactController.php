<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(Request $request, \Swift_Mailer $mailer): Response
    {  
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()) {
              $contact = $form->getData();
               if ($contact['fichier'] !== null) {
                   $extensionFichier = $contact['fichier']->guessExtension();
                   $pieceJointe = (\Swift_Attachment::fromPath($contact['fichier']->getPathName()))
                   ->setFilename('fichier.' . $extensionFichier );
               }
               $mail = (new \Swift_Message('FREEBIRD - Demande de contact - ' .$contact['objet']))
               ->setFrom($contact['email'])
               ->setTo('djibybastian50@gmail.com')
               ->setBody(
                   $this->renderView(
                       'contact/emailContact.html.twig', [
                           'nom' =>$contact ['nom'],
                           'prenom'=> $contact['prenom'],
                           'email' =>$contact ['email'],
                           'objet' => $contact['objet'],
                           'message' =>$contact ['message']
                        ]
                      ),
                       'text/html'
                    )
              ;
              if ($contact['fichier'] !== null) { 
                $mail->attach($pieceJointe);
            }

            $mailer->send($mail);
            $this->addFlash('info' , 'votre message a été bien envoyé');
            return $this->redirectToRoute('contact');
       }

        return $this->render('contact/contact.html.twig', [
            'contactForm'=> $form->createView()
            
        ]);
    }
}
