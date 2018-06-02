<?php

namespace App\Form;

use App\Entity\Candidata;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CandidataType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipoDoc')
            ->add('cualTipoDoc')
            ->add('numeroID')
            ->add('nombres')
            ->add('apellidos')
            ->add('fechaNacimiento')
            ->add('email')
            ->add('telefono')
            ->add('direccion')
            ->add('estadoCivil')
            ->add('hijos')
            ->add('nivelEstudios')
            ->add('ultimoTitulo')
            ->add('nombreTitulo')
            ->add('actualmenteEstudia')
            ->add('queEstudia')
            ->add('nombreTituloObtener')
            ->add('actualmenteTrabaja')
            ->add('sectorLaboral')
            ->add('cualSector')
            ->add('negocioPropio')
            ->add('formaTrabajo')
            ->add('tipoEmpresa')
            ->add('haTrabajado')
            ->add('tiempoDesempleo')
            ->add('conoceTIC')
            ->add('usaTIC')
            ->add('entretenimientoUso')
            ->add('redesUso')
            ->add('correoUso')
            ->add('comprasUso')
            ->add('ventasUso')
            ->add('comunicaionUso')
            ->add('educacionUso')
            ->add('bancoUso')
            ->add('serviciosPublicosUso')
            ->add('tramitesUso')
            ->add('otroUso')
            ->add('interesTIC')
            ->add('entretenimientoInteres')
            ->add('redesInteres')
            ->add('correoInteres')
            ->add('comprasInteres')
            ->add('ventasInteres')
            ->add('comunicacionInteres')
            ->add('educacionInteres')
            ->add('bancoInteres')
            ->add('serviciosPublicosInteres')
            ->add('tramitesInteres')
            ->add('desinteresTIC')
            ->add('cualDesinteres')
            ->add('cualInteres')
//            ->add('fechaIngreso')
            ->add('tipoCandidata')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidata::class,
        ]);
    }
}
