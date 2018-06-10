<?php

namespace App\Form;

use App\Entity\Socio;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SocioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('nit')
            ->add('representante')
            ->add('cedulaRepresentante')
            ->add('correoRepresentante')
            ->add('telefonoRepresentante')
            ->add('fechaIngreso')
            ->add('tipoAporte')
            ->add('tipoSocio')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Socio::class,
        ]);
    }
}
