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
use Symfony\Component\Form\CallbackTransformer;

use AudiovisualesBundle\Entity\Categoria;




class SolicitudPruebasType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreSolicitante', TextType::class, ['label' => 'Nombre: '])
                ->add('apellido1Solicitante', TextType::class, ['label' => 'Primer Apellido: '])
                ->add('apellido2Solicitante', TextType::class, ['label' => 'Segundo Apellido: '])
                ->add('telefonoSolicitante', TelType::class, ['label' => 'Teléfono: '])
                ->add('emailSolicitante', EmailType::class, ['label' => 'E-mail: '])
            ->add('lugarEvento', ChoiceType::class,
                    array(
                        'choices' => array(
                           'Rectorado' => array(
                                'Salón de Actos' => 'Rectorado: Salón de Actos',
                            ),
                        ),//fin 'choices'
                        'label' => 'Lugar del evento: '
                    )//fin array de choiceType
                )//fin add LugarEvento 
            ->add('desde', DateTimeType::class)
            ->add('hasta', DateTimeType::class)
            ->add('serviciosContratados', ChoiceType::class, array(
                    'multiple' => true, 'expanded' => true, 'required' => true, 'label' => 'Servicios: ',
                    'choices' => array(
                        'Sistema de Audio y/o Proyección' => 'Sistema de Audio y/o Proyección',
                        'Grabación y/o Streaming' => 'Grabación y/o Streaming',
                    ),
                ));     

            /*
                https://symfony.com/doc/3.4/form/data_transformers.html

                // src/AppBundle/Form/Type/TaskType.php
                namespace AppBundle\Form\Type;

                use Symfony\Component\Form\CallbackTransformer;
                use Symfony\Component\Form\FormBuilderInterface;
                use Symfony\Component\Form\Extension\Core\Type\TextType;
                // ...

                class TaskType extends AbstractType
                {
                    public function buildForm(FormBuilderInterface $builder, array $options)
                    {
                        $builder->add('tags', TextType::class);

                        $builder->get('tags')
                            ->addModelTransformer(new CallbackTransformer(
                                function ($tagsAsArray) {
                                    // transform the array to a string
                                    return implode(', ', $tagsAsArray);
                                },
                                function ($tagsAsString) {
                                    // transform the string back to an array
                                    return explode(', ', $tagsAsString);
                                }
                            ))
                        ;
                    }

                    // ...
                }
            */

        $builder
            ->add('importeTotal', MoneyType::class, ['label' => 'Importe Total: '],
                    function() {
                        $serv=0;
                        $serviciosContratados = 'serviciosContratados';
                        $serv = count($serviciosContratados);
                        $importeTotal=26.52;
                        $importeTotal=$importeTotal*($serv+1);
                        return $importeTotal;
                    },
                    ['disable'=>true]);
        $builder->get('serviciosContratados')->addModelTransformer(new CallbackTransformer(
                        function ($tagsAsArray) {
                        // transform the array to a string
                            $tagsAsArray=$builder->get('serviciosContratados');
                            $ret=implode(", ", $tagsAsArray);    
                        
                            return $ret;
                        },
                    function ($tagsAsString) {

                        return explode(', ', $tagsAsString);
                    }
                ));
        $builder
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
