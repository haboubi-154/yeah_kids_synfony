<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ForgetPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('login',TextType::class,['label'=>'login','attr'=>['placeholder'=>'login','class'=>'login']])
        ->add('question', ChoiceType::class, [
            'choices'  => [
                'Dans quelle ville êtes-vous né ?
                ' => "Dans quelle ville êtes-vous né?" 
                ,
                'Quel est votre film favori ?' => "Quel est votre film favori ?",
                'Quelle est la marque de votre première voiture ?' => "Quelle est votre couleur favorite ?",
            ]    
        ]) 
        ->add('reponse',TextType::class,['label'=>'reponse','attr'=>['placeholder'=>'reponse','class'=>'reponse']])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
