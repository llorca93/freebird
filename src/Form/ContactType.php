<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'required' => true
            ])
            ->add('prenom', TextType::class, [
                'required' => true
            ])
            ->add('email', EmailType::class, [
                'required' => true
            ])
            ->add('objet', ChoiceType::class, [
                'required' => true,
                'choices' => [
                    '-choix-'=> '',
                    'Demande d\'être recontacté' => 'rappeler',
                    'demander un devis'=> 'devis',
                    'Signaler un problème' => 'problème',
                    'Conseils' => 'avis',
                    'autres' => 'différents'
                ]
            ])
            ->add('message', TextareaType::class, [
                'attr' => [
                    'miniLenght' => 20,
                    'maxLenght' => 2000
                ]
                
            ])
            ->add('fichier', FileType::class, [
                'required' => false,
                'help' => 'png, jpeg, jpg, pdf - 2 Mo maximum',
                'constraints' => [
                    new File([
                        'maxSize' => '2048k',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpg',
                            'image/jpeg',
                            'image/jp2',
                            'application/pdf'
                        ],
                        'mimeTypesMessage' =>'merci de selectionner un fichier au format png/jpg/jpeg/jp2/pdf'
                    ])
                   
                ]
            ])
            ->add('envoyer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
