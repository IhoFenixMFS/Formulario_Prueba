<?php

namespace AudiovisualesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

//Importar los tipos
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use AudiovisualesBundle\Entity\Categoria;




class SolicitudType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreSolicitante', TextType::class)
            ->add('apellido1Solicitante', TextType::class)
            ->add('apellido2Solicitante', TextType::class)
            ->add('telefonoSolicitante', TelType::class)
            ->add('emailSolicitante', EmailType::class)
            
            ->add('lugarEvento', ChoiceType::class, [
                'choices' => [
                        new Categoria('Rectorado: Salón de Actos'),
                        new Categoria('Móstoles: Aula Magna 1'),
                        new Categoria('Móstoles: Aula Magna 2'),
                        new Categoria('Móstoles: Aula Magna 3'),
                        new Categoria('Móstoles: Salón de Grados 1'),
                        new Categoria('Móstoles: Salón de Grados 2'),
                        new Categoria('Alcorcón: Salón de Actos Gestión'),
                        new Categoria('Alcorcón: Salón de Actos Departamental 2'),
                        new Categoria('Alcorcón: Salón de Grados 1'),
                        new Categoria('Alcorcón: Aula Magna 1'),
                        new Categoria('Fuenlabrada: Salón de Actos'),
                        new Categoria('Fuenlabrada: Salón de Grados'),
                        new Categoria('Fuenlabrada: Aula Magna 1'),
                        new Categoria('Fuenlabrada: Aula Magna 3'),
                        new Categoria('Madrid: Salón de Actos Biblioteca'),
                        new Categoria('Madrid: Salón de Actos Manuel Becerra'),
                        new Categoria('Madrid: Salón de Grados 1'),
                    ],//fin corchete opciones
                    'choice_label'=>function($categoria){return $categoria->getName();},
                    /*'choice_attr' => function($categoria) {
                        return['class'=>'lugarEvento_'.strtolower($categoria->getName())];
                        },*/
                ]//fin corchete choiceType
            )
            $builder->get('lugarEvento')
                ->addModelTransformer(new CallbackTransformer(
                    function ($tagsAsArray) {
                        // transform the array to a string
                        return implode(', ', $tagsAsArray);
                    },
                    function ($tagsAsString) {
                        // transform the string back to an array
                        return explode(', ', $tagsAsString);
                    }
                ));
                
            $builder
            ->add('serviciosContratados', ChoiceType::class, [
                'choices' => [
                        new Categoria('uno'),
                        new Categoria('dos'),
                        new Categoria('tres'),
                    ],//fin corchete opciones
                    'choice_label' => function($categoria, $key, $index) {
                        /** @var Categoria $categoria */
                        return strtoupper($categoria->getName());
                    },
                    'choice_attr' => function($categoria, $key, $index) {
                        return ['class' => 'serviciosContratados_'.strtolower($categoria->getName())];
                    },
                ]//fin corchete choiceType
            )
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
