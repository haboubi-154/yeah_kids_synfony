<?php

namespace App\Form;

use App\Entity\Jardinenfant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class JardinenfantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('logo',FileType::class,array('data_class'=>null,'label'=>'logo'))
            ->add('nbEmployes')
            ->add('adresse')
            ->add('dateCreation')
            ->add('prix')
            ->add('telephone')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Jardinenfant::class,
        ]);
    }
}
