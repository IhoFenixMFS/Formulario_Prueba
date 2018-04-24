<?php

namespace FormularioBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class FacturacionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombreEmp', TextType::class, ['label' => 'Denominación empresa: ', 'required' => false])
            ->add('cIFNIF', TextType::class, ['label' => 'CIF / NIF: ', 'required' => false])
            ->add('tlfEmp', TelType::class, ['label' => 'Telf. de la empresa: ', 'required' => false])
            ->add('emailEmp', EmailType::class, ['label' => 'E-mail de la empresa: ', 'required' => false])
            ->add('contacto', TextType::class, ['label' => 'Persona de contacto: ', 'required' => false]);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FormularioBundle\Entity\Facturacion'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'formulariobundle_facturacion';
    }


}
