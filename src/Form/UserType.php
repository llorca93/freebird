<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('gender', ChoiceType::class, [
                'choices' => [
                    'homme'=>'Homme',
                    'femme'=>'Femme',
            ],
                'required'=>true,
                'multiple'=>false,
                'expanded'=>true,
                'label'=> 'Civilité'
               
            ])

            ->add('last_name', TextType::class,[
                'required' => true,
                'label'=> 'Nom',           
                'attr' =>[
                'placeholder' => 'Doe'
                 ]

            ] )           

            ->add('first_name', TextType::class,[
                'required' => true,
                'label'=> 'Prénom',
                'attr' =>[
                    'placeholder' => 'John'
                ]
            ])

            ->add('email', EmailType::class, [
                'required' =>true,
                'attr'=>[
                    'placeholder'=> 'prenom.nom@domaine.com'
                ]
            ])

            ->add('dob', BirthdayType::class, [
                'required'=> false,
                'label'=> 'Date de naissance',
                'widget'=> 'single_text',
                'format'=> 'yyyy-MM-dd',
                'attr'=>[
                    'placeholder'=> 'jj-mm-yyyy'
                ]
            ])

            ->add('address', TextType::class, [
                'required'=>false,
                'label'=> 'Adresse',
                'attr'=>[
                    'placeholder'=> 'Ex: 11 rue de la Liberté'
                ]
            ])
            ->add('city', TextType::class,[
                'required'=>false,
                'label'=> 'Ville',
                'attr'=>[
                    'placeholder'=> 'Ex: Paris'
                ]
            ])
            ->add('zip_code', IntegerType::class, [
                'required'=>false,
                'label'=> 'Code postal',
                'attr'=>[
                    'placeholder'=> 'Ex: 75000',
                    'min'=> 10000,
                    'max'=>99999,
                ]

            ] )

            ->add('roles', ChoiceType::class, [
                'required' => false,
                'multiple' => true,
                'expanded' =>true, 
                'choices' => [
                    'super_admin' => 'ROLE_SUPER_ADMIN',
                    'administrateur' => 'ROLE_ADMIN',
                    'utilisateur' => 'ROLE_USER'
                ]
            ] )

                      
            ->add('valider', SubmitType::class)
        
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
