<?php

namespace Foggyline\ShipmentBundle\Service;

use Foggyline\ShipmentBundle\Entity\DynamicRate;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DynamicRateShipment
{
    private $formFactory;
    private $router;

    public function __construct(
        $formFactory,
        \Symfony\Bundle\FrameworkBundle\Routing\Router $router
    )
    {
        $this->formFactory = $formFactory;
        $this->router = $router;
    }

    public function getInfo($quote = null)
    {
        // Dummy entity model, so our form works
        $dynamicRate = new DynamicRate();

        // Dummy API call to some external service to fetch delivery options based on passed Quote object
        $deliveryOptions = $this->getDeliveryOptions($quote);

        // Build choices for delivery options field
        $choices = array();

        foreach ($deliveryOptions as $deliveryOption) {
            $title = sprintf('%s - %s', $deliveryOption['price'], $deliveryOption['label']);
            $choices[$title] = $deliveryOption['code'];
        }

        // Build a form to be rendered under Shipment step of the checkout process
        $form = $this->formFactory->createBuilder(FormType::class, $dynamicRate)
            ->add('delivery_options', ChoiceType::class, array(
                'choices' => array(
                    'English' => 'en',
                    'Spanish' => 'es',
                    'Bork'   => 'muppets',
                    'Pirate' => 'arr'
                ),
                'expanded' => true,
            ))
            ->getForm();

        // Return shipment info
        return array(
            'shipment' => array(
                'title' => 'Foggyline DynamicRate Shipment',
                'code' => 'dynamicrate_shipment',
                'url_process' => $this->router->generate('foggyline_shipment_dynamic_rate_process'),
                'form' => $form->createView()
            )
        );
    }

    /**
     * Imagine we are calling external API from this method, like FedEx, UPS, etc.
     * 
     * @param null $quote
     * @return array
     */
    public function getDeliveryOptions($quote = null)
    {
        return array(
            array(
                'label' => 'Same day delivery',
                'code' => 'dynamic_rate_sdd',
                'price' => 9.99
            ),
            array(
                'label' => 'Standard delivery',
                'code' => 'dynamic_rate_sd',
                'price' => 4.99
            ),
        );
    }
}