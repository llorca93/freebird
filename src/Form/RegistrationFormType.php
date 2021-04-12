<?php

namespace App\Form;

use App\Entity\User;
use DateTimeInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Rollerworks\Component\PasswordStrength\Validator\Constraints\PasswordStrength;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender', ChoiceType::class, [
                'choices' => [
                    'Homme'=>'Homme',
                    'Femme'=>'Femme',
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
                'attr'=> [
                    'placeholder' =>  'prenom.nom@gmail.com'
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                
                'attr'=>[
                    'placeholder' => '********',
                    'label'=> 'Mot de passe',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir un mot de passe',
                    ]),
                    new PasswordStrength([
                        'minLength' => 8,
                        'tooShortMessage' => 'Le mot de passe doit contenir minimum 8 caractères dont une lettre miniscule, une lettre majuscule, un chiffre et un caractère spécial',
                        'minStrength'=> 4,
                        'message' => 'Le mot de passe doit contenir minimum 8 caractères dont une lettre miniscule, une lettre majuscule, un chiffre et un caractère spécial'
                    ]),
                ],
            ])

            ->add('dob', DateType::class, [
                'required'=> false,
                'label'=> 'Date de naissance',
                'widget'=> 'single_text',
                'empty_data' => null,
                // 'format'=> 'yyyy-MM-dd',
                'attr'=>[
                    'placeholder'=> 'jj-mm-yyyy'
                ]
            ])

            ->add('address', TextType::class, [
                'required'=>true,
                'label'=> 'Adresse',
                'attr'=>[
                    'placeholder'=> 'Ex: 11 rue de la Liberté'
                ]
            ])
            ->add('city', TextType::class,[
                'required'=>true,
                'label'=> 'Ville',
                'attr'=>[
                    'placeholder'=> 'Ex: Paris'
                ]
            ])
            ->add('zip_code', IntegerType::class, [
                'required'=>true,
                'label'=> 'Code postal',
                'attr'=>[
                    'placeholder'=> 'Ex: 75000',
                    'min'=> 10000,
                    'max'=>99999,
                ]

            ]);
        
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
