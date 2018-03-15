<?php

namespace FormularioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FormularioBundle\Entity\Solicitudes;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SolicitudesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder
                ->add('idSolicitante', IntegerType::class)
                ->add('cIFNIFFactura', TextareaType::class)
                ->add('idLugar', ChoiceType::class)
                ->add('totalCiva', MoneyType::class)
                ->add('totalSiva', MoneyType::class)
                ->add('servicios', ChoiceType::class)
                ->add('save', SubmitType::class, array('label' => 'Aceptar Solicitud'))
                ;
            /*
                Doc. formularios:
                http://symfony.com/doc/3.4/best_practices/forms.html
            */
        }
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
        {
            $resolver->setDefaults(array(
                'data_class' => Solicitudes::class
            ));
        }
    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
        {
            return 'formulariobundle_solicitudes';
        }
}
