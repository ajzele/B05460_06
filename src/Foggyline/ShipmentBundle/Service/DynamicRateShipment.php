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

    public function getInfo($street, $city, $country, $postcode, $amount, $qty)
    {
        // Return shipment info
        return array(
            'shipment' => array(
                'title' => 'Foggyline DynamicRate Shipment',
                'code' => 'dynamic_rate_shipment',
                'delivery_options' => $this->getDeliveryOptions($street, $city, $country, $postcode, $amount, $qty),
                'url_process' => $this->router->generate('foggyline_shipment_dynamic_rate_process'),
            )
        );
    }

    /**
     * Imagine we are calling external API from this method, like FedEx, UPS, etc.
     * Here we are merely trying to get an estimated price for shipping, we are not actually making any shipment entry
     * on our API - we will use http://shop.app/app_dev.php/shipment/dynamic_rate/process for that.
     *
     * @param null $quote
     * @return array
     */
    public function getDeliveryOptions($street, $city, $country, $postcode, $amount, $qty)
    {
        // Imagine we are hitting the API with: $street, $city, $country, $postcode, $amount, $qty
        return array(
            array(
                'title' => 'Same day delivery',
                'code' => 'dynamic_rate_sdd',
                'price' => 9.99
            ),
            array(
                'title' => 'Standard delivery',
                'code' => 'dynamic_rate_sd',
                'price' => 4.99
            ),
        );
    }
}