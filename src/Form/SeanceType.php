<?php

namespace App\Form;

use App\Entity\Seance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Salle;
use App\Entity\Coach;

class SeanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Title',
                'attr' => ['class' => 'form-control']
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'attr' => ['class' => 'form-control']
            ])
            ->add('duree', IntegerType::class, [
                'label' => 'Duration (minutes)',
                'attr' => ['class' => 'form-control']
            ])
            ->add('capacite', IntegerType::class, [
                'label' => 'Capacity',
                'attr' => ['class' => 'form-control']
            ])
            ->add('dateHeure', DateTimeType::class, [
                'label' => 'Date and Time',
                'attr' => ['class' => 'form-control']
            ])
            ->add('salle', EntityType::class, [
                'class' => Salle::class,
                'choice_label' => 'name',
                'label' => 'Salle',
                'attr' => ['class' => 'form-control']
            ])
            ->add('coach', EntityType::class, [
                'class' => Coach::class,
                'choice_label' => 'name',
                'label' => 'Coach',
                'attr' => ['class' => 'form-control']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Seance::class,
        ]);
    }
}

