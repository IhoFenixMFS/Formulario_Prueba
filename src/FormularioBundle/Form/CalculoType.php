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

use FormularioBundle\Entity\Lugares;
use FormularioBundle\Entity\Calculo;
use FormularioBundle\Entity\Datos;
use FormularioBundle\Entity\Duracion;
use FormularioBundle\Entity\Facturacion;
use FormularioBundle\Entity\Servicios;

use FormularioBundle\Form\CalculoType;
use FormularioBundle\Form\DatosType;
use FormularioBundle\Form\FacturacionType;
use FormularioBundle\Form\DuracionType;

class CalculoType extends AbstractType
{
    /**
     * {@inheritdoc}
     * Esta función es la encargada de crear el formulario.
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {   
        /**
         * Mediante el $builder vamos añadiendo al formulario un campo por cada elemento de la entidad asociada.
         * Estos elementos son de la forma:
         * '<nombredelatributo>' con el que indicamos a que atributo de la clase corresponde,
         * <tipo de campo>Type::class donde decimos a symfony que tipo de campo es y él lo configura con sus
         *    restricciones propias y lo renderiza,
         * además de las etiquetas adicionales según cada tipo de campo para configurarlo de forma personalizada.
        */
        $builder
        /**
         * Los ChoiceType tienen 4 variantes: según el valor de sus propiedades 'multiple' y 'expanded',
         * ambas de tipo booleano, y pueden ser desplegables, radioButton, multiCheckbox y cuadros de 
         * multiselección.
        */
            ->add('lugar', ChoiceType::class,
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
                ))

/*  Se elimina de la entidad  --------------------------------------------------------------------------- 

            ->add('fechas', DuracionType::class, ['label' => 'Fechas:'])//muereeeee

--------------------------------------------------------------------------------------------------------- */

            ->add('servicios', ChoiceType::class, array(
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
                ))
            ->add('importeTotal', MoneyType::class, ['label' => 'Importe Total: '])
            ->add('save', SubmitType::class, ['label' => 'Continuar con la solicitud.']);

    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FormularioBundle\Entity\Calculo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'formulariobundle_calculo';
    }


}
