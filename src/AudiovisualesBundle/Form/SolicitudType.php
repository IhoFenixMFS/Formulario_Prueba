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
            ->add('lugarEvento', ChoiceType::class, array(
                'choices' => array(
                        'Rectorado: Salón de Actos' => 'Rectorado: Salón de Actos',
                        'Móstoles: Aula Magna 1' => 'Móstoles: Aula Magna 1',
                        'Móstoles: Aula Magna 2' => 'Móstoles: Aula Magna 2',
                        'Móstoles: Aula Magna 3' => 'Móstoles: Aula Magna 3',
                        'Móstoles: Salón de Grados 1' => 'Móstoles: Salón de Grados 1',
                        'Móstoles: Salón de Grados 2' => 'Móstoles: Salón de Grados 2',
                        'Alcorcón: Salón de Actos Gestión' => 'Alcorcón: Salón de Actos Gestión',
                        'Alcorcón: Salón de Actos Departamental 2' => 'Alcorcón: Salón de Actos Departamental 2',
                        'Alcorcón: Salón de Grados 1' => 'Alcorcón: Salón de Grados 1',
                        'Alcorcón: Aula Magna 1' => 'Alcorcón: Aula Magna 1',
                        'Fuenlabrada: Salón de Actos' => 'Fuenlabrada: Salón de Actos',
                        'Fuenlabrada: Salón de Grados' => 'Fuenlabrada: Salón de Grados',
                        'Fuenlabrada: Aula Magna 1' => 'Fuenlabrada: Aula Magna 1',
                        'Fuenlabrada: Aula Magna 3' => 'Fuenlabrada: Aula Magna 3',
                        'Madrid: Salón de Actos Biblioteca' => 'Madrid: Salón de Actos Biblioteca',
                        'Madrid: Salón de Actos Manuel Becerra' => 'Madrid: Salón de Actos Manuel Becerra',
                        'Madrid: Salón de Grados 1' => 'Madrid: Salón de Grados 1',
                    )
                ))
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
