<?php

namespace AudiovisualesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

//Importar los tipos
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

use AudiovisualesBundle\Entity\Categoria;

class SolicitudType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            /*----------------------------- Datos solicitante ------------------------*/
            ->add('nombreSolicitante', TextType::class, ['label' => 'Nombre: '])
            ->add('apellido1Solicitante', TextType::class, ['label' => 'Primer Apellido: '])
            ->add('apellido2Solicitante', TextType::class, ['label' => 'Segundo Apellido: '])
            ->add('telefonoSolicitante', TelType::class, ['label' => 'Teléfono: '])
            ->add('emailSolicitante', EmailType::class, ['label' => 'E-mail: '])
            /*------------------------------ Facturacion -------------------------------*/
            ->add('empresa', TextType::class, ['label' => 'Denominación empresa: ', 'required' => false])
            ->add('cifNif', TextType::class, ['label' => 'CIF / NIF: ', 'required' => false])
            ->add('telefono', TelType::class, ['label' => 'Telf. de la empresa: ', 'required' => false])
            ->add('email', EmailType::class, ['label' => 'E-mail de la empresa: ', 'required' => false])
            ->add('contacto', TextType::class, ['label' => 'Persona de contacto: ', 'required' => false])
            /*---------------------------- Datos del evento --------------------------*/
            ->add('lugarEvento', ChoiceType::class,
                    array(
                        'choices' => array(
                           'Rectorado' => array(
                                'Salón de Actos' => 'Rectorado: Salón de Actos',
                            ),
                            'Móstoles' => array(
                                'Aula Magna 1' => 'Móstoles: Aula Magna 1',
                                'Aula Magna 2' => 'Móstoles: Aula Magna 2',
                                'Aula Magna 3' => 'Móstoles: Aula Magna 3',
                                'Salón de Grados 1' => 'Móstoles: Salón de Grados 1',
                                'Salón de Grados 2' => 'Móstoles: Salón de Grados 2',
                            ),
                            'Alcorcón' => array(
                                'Salón de Actos Gestión' => 'Alcorcón: Salón de Actos Gestión',
                                'Salón de Actos Departamental 2' => 'Alcorcón: Salón de Actos Departamental 2',
                                'Salón de Grados 1' => 'Alcorcón: Salón de Grados 1',
                                'Aula Magna 1' => 'Alcorcón: Aula Magna 1',
                            ),
                            'Fuenlabrada' => array(
                                'Salón de Actos' => 'Fuenlabrada: Salón de Actos',
                                'Salón de Grados' => 'Fuenlabrada: Salón de Grados',
                                'Aula Magna 1' => 'Fuenlabrada: Aula Magna 1',
                                'Aula Magna 3' => 'Fuenlabrada: Aula Magna 3',
                            ),
                            'Madrid' => array(
                                'Salón de Actos Biblioteca' => 'Madrid: Salón de Actos Biblioteca',
                                'Salón de Actos Manuel Becerra' => 'Madrid: Salón de Actos Manuel Becerra',
                                'Salón de Grados 1' => 'Madrid: Salón de Grados 1',
                            ),
                        ),//fin 'choices'
                        'label' => 'Lugar del evento: '
                    )//fin array de choiceType
                )//fin add LugarEvento 
            ->add('desde', DateTimeType::class)
            ->add('hasta', DateTimeType::class)
            ->add('serviciosContratados', ChoiceType::class, array(
                    'multiple' => true,
                    'expanded' => true,
                    'choices' => array(
                        'Sistema de Audio y/o Proyección' => 'Sistema de Audio y/o Proyección',
                        'Grabación y/o Streaming' => 'Grabación y/o Streaming',
                        'Traducción simultánea' => 'Traducción simultánea',
                        'Sistema de audio para prensa externa' => 'Sistema de audio para prensa externa',
                        'Servicio Técnico previo al evento' => 'Servicio Técnico previo al evento',
                        'Video conferencia' => 'Video conferencia',
                    ),
                    'required' => true,
                    /*'label' => 'Servicios disponibles: ',*/
                    )//fin array de opciones del CoiceType
                )//fin add 'serviciosContratados'
            ->add('importeTotal', MoneyType::class, ['label' => 'Importe Total: '])
            ->add('save', SubmitType::class, ['label' => 'Enviar Solicitud']);
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
