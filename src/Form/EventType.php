<?php

namespace App\Form;

use App\Entity\Astuce;
use App\Entity\Event;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;



class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomEvent',TextType::class)

            ->add('dateDebutEvent',DateType::class,['widget' => 'single_text'])
            ->add('dateFinEvent',DateType::class,['widget' => 'single_text'])
            ->add('lieuEvent',TextType::class)
            ->add('capaciteEvent',NumberType::class,[

            ])
            ->add('descriptionEvent',TextType::class)
            ->add('prixEvent',NumberType::class,[

            ])
            ->add('typeEvent',ChoiceType::class, [
                'choices'  => [
                    'Adventure' => 'Adventure',
                    'Sport' => 'Sport',
                    'Nature' => 'Nature',
                ],
            ])

            ->add('logo',FileType::class,array('data_class' => null))
            ->add('Ajouter',SubmitType::class, ['label' => 'Save']);
        ;
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
