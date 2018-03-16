<?php

namespace AudiovisualesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

//Importar los tipos
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\TelType;



class SolicitudType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreSolicitante', TextareaType::class)
            ->add('apellido1Solicitante', TextareaType::class)
            ->add('apellido2Solicitante', TextareaType::class)
            ->add('telefonoSolicitante', TelType::class)
            ->add('emailSolicitante', EmailType::class)
            ->add('lugarEvento', ChoiceType::class)
            ->add('serviciosContratados', TextareaType::class)
            ->add('importeTotal', MoneyType::class)
            ->add('save', SubmitType::class, array('label' => 'Enviar Solicitud'))
            ;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AudiovisualesBundle\Entity\Solicitud'
        ));
    }

    

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'audiovisualesbundle_solicitud';
    }


}
