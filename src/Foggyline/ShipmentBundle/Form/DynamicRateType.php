<?php

namespace Foggyline\ShipmentBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DynamicRateType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('delivery_options', ChoiceType::class, array(
            'choices' => array(
                'English' => 'en',
                'Spanish' => 'es',
                'Bork'   => 'muppets',
                'Pirate' => 'arr'
            ),
            'expanded' => true,
        ));
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Foggyline\ShipmentBundle\Entity\DynamicRate'
        ));
    }
}
