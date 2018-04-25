<?php

namespace FormularioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\FormType;

use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;


use FormularioBundle\Entity\Lugares;
use FormularioBundle\Entity\Calculo;
use FormularioBundle\Entity\Datos;
use FormularioBundle\Entity\Duracion;
use FormularioBundle\Entity\Facturacion;
use FormularioBundle\Entity\Servicios;

/**
 * Aqui creamos el subformulario para ir añadiendo días al formulario de calculo.
*/
class DuracionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dia', DateType::class, ['label' => 'Día:'])
            ->add('desde', TimeType::class, ['label' => 'Desde:'])
            ->add('hasta', TimeType::class, ['label' => 'hasta:'])
        ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FormularioBundle\Entity\Duracion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'formulariobundle_duracion';
    }


}
