<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pais', TextType::class, [
                'label' => 'País',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese el nombre del país',
                    'maxlength' => 56,
                    'minlength' => 3,
                    'title' => 'El nombre del país debe tener entre 3 y 56 caracteres',
                    'data-toggle' => 'tooltip',
                ],
            ])
            ->add('continente', ChoiceType::class, [
                'label' => 'Continente',
                'required' => true,
                'choices' => [
                    'África' => 'África',
                    'América' => 'América',
                    'Asia' => 'Asia',
                    'Europa' => 'Europa',
                    'Oceanía' => 'Oceanía',
                ],
                'expanded' => true,
                'multiple' => true,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese el nombre del continente',
                    'maxlength' => 35,
                    'minlength' => 3,
                    'title' => 'El nombre del continente debe tener entre 3 y 35 caracteres',
                    'data-toggle' => 'tooltip',
                ],
            ])
            ->add('descripcion', TextType::class, [
                'label' => 'Descripción',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ingrese una descripción del país',
                    'maxlength' => 255,
                    'minlength' => 0,
                    'title' => 'La descripción puede tener hasta 255 caracteres',
                    'data-toggle' => 'tooltip',
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
