<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom',TextType::class,['label'=>'prenom','attr'=>['placeholder' => 'prenom','class'=>'prenom']])
            ->add('nom',TextType::class,['label'=>'nom','attr'=>['placeholder'=>'NAME','class'=>'name']])
            ->add('email',TextType::class,['label'=>'email','attr'=>['placeholder'=>'email','class'=>'email']])
            ->add('login',TextType::class,['label'=>'login','attr'=>['placeholder'=>'login','class'=>'login']])
            ->add('img', FileType::class, ['data_class' => null,'required' => true,
                'label' => ' ( file)',

                

                
                'required' => false,
'constraints' => [new File([
                        'maxSize' => '10240k',
                        'mimeTypesMessage' => 'Please upload a valid JPG document',
                    ])
                ],
            ])
            
            
            ->add('password',TextType::class,['label'=>'password','attr'=>['placeholder'=>'password','class'=>'password']])
            ->add('question', ChoiceType::class, [
                'choices'  => [
                    'Dans quelle ville êtes-vous né ?
                    ' => "Dans quelle ville êtes-vous né?" 
                    ,
                    'Quel est votre film favori ?' => "Quel est votre film favori ?",
                    'Quelle est la marque de votre première voiture ?' => "Quelle est votre couleur favorite ?",
                ]    
            ])        
            ->add('responde',TextType::class,['label'=>'responde','attr'=>['placeholder'=>'responde','class'=>'responde']])
            ->add('Role', ChoiceType::class, [
                'choices'  => [
                    'Admin' => "admin" 
                    ,
                    'Manager' => "manager",
                    'Parent' => "parent",
                ]    
            ])   
           ;
            
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
    

}
