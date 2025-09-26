<?php

namespace App\Form;

use App\Entity\Usuario;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nombre', TextType::class, [ // agregamos el texttype para personalizar el campo
                'label' => 'Nombre', // personalizamos la etiqueta para que muestre "Nombre" en lugar del nombre del campo en la base de datos
                'required' => true, // hacemos que el campo sea obligatorio que por dejefcto es true pero lo ponemos para que se note
                'attr' => [ // agregamos atributos HTML al campo
                    'class' => 'form-control', // clase de Bootstrap para estilizar el campo o cualquier otra clase para css o js
                    'placeholder' => 'Ingrese su nombre', // placeholder para que el usuario sepa que debe ingresar
                    'maxlength' => 35, // maximo de caracteres que puede ingresar
                    'minlength' => 3, // minimo de caracteres que debe ingresar
                    'title' => 'El nombre debe tener entre 3 y 35 caracteres', // tooltip que se muestra al pasar el mouse sobre el campo
                    'data-toggle' => 'tooltip', // atributo para activar el tooltip con Bootstrap
                ],
            ])
            ->add('ap_paterno', TextType::class, [ // agregamos el texttype para personalizar el campo
                'label' => 'Apellido Paterno', // personalizamos la etiqueta para que muestre "Apellido Paterno" en lugar del nombre del campo en la base de datos
                'required' => true, // hacemos que el campo sea obligatorio que por dejefcto es true pero lo ponemos para que se note
                'attr' => [ // agregamos atributos HTML al campo
                    'class' => 'form-control', // clase de Bootstrap para estilizar el campo o cualquier otra clase para css o js
                    'placeholder' => 'Ingrese su apellido paterno', // placeholder para que el usuario sepa que debe ingresar
                    'maxlength' => 35, // maximo de caracteres que puede ingresar
                    'minlength' => 3, // minimo de caracteres que debe ingresar
                    'title' => 'El apellido paterno debe tener entre 3 y 35 caracteres', // tooltip que se muestra al pasar el mouse sobre el campo
                    'data-toggle' => 'tooltip', // atributo para activar el tooltip con Bootstrap
                ],
            ])
            ->add('ap_materno', TextType::class, [ // agregamos el texttype para personalizar el campo
                'label' => 'Apellido Materno', // personalizamos la etiqueta para que muestre "Apellido Materno" en lugar del nombre del campo en la base de datos
                'required' => false, // hacemos que el campo no sea obligatorio
                'attr' => [ // agregamos atributos HTML al campo
                    'class' => 'form-control', // clase de Bootstrap para estilizar el campo o cualquier otra clase para css o js
                    'placeholder' => 'Ingrese su apellido materno', // placeholder para que el usuario sepa que debe ingresar
                    'maxlength' => 35, // maximo de caracteres que puede ingresar
                    'minlength' => 3, // minimo de caracteres que debe ingresar
                    'title' => 'El apellido materno debe tener entre 3 y 35 caracteres', // tooltip que se muestra al pasar el mouse sobre el campo
                    'data-toggle' => 'tooltip', // atributo para activar el tooltip con Bootstrap
                ],
            ])
            ->add('edad', NumberType::class, [ // agregamos el numbertype para personalizar el campo
                'label' => 'Edad', // personalizamos la etiqueta para que muestre "Edad" en lugar del nombre del campo en la base de datos
                'required' => true, // hacemos que el campo sea obligatorio que por dejefcto es true pero lo ponemos para que se note
                'scale' => 0, // para que no acepte decimales
                'html5' => true, // para que use el input type number de HTML5
                'attr' => [ // agregamos atributos HTML al campo
                    'class' => 'form-control', // clase de Bootstrap para estilizar el campo o cualquier otra clase para css o js
                    'placeholder' => 'Ingrese su edad', // placeholder para que el usuario sepa que debe ingresar
                    'min' => 0, // minimo de caracteres que puede ingresar
                    'max' => 120, // maximo de caracteres que puede ingresar
                    'title' => 'La edad debe estar entre 0 y 120 años', // tooltip que se muestra al pasar el mouse sobre el campo
                    'data-toggle' => 'tooltip', // atributo para activar el tooltip con Bootstrap
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Usuario::class,
        ]);
    }
}
