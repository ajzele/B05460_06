<?php

namespace Foggyline\ShipmentBundle\Service;

use Foggyline\ShipmentBundle\Entity\DynamicRate;

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

    public function getInfo()
    {
        $dynamicRate = new DynamicRate();
        $form = $this->formFactory->create('Foggyline\ShipmentBundle\Form\DynamicRateType', $dynamicRate);

        // The sales module should trigger AJAX POST on the process_url
        // the code within the process_url should do the capture, meaning authorize as well
        // once AJAX returns, the success key should return transaction id, or error key should return error message
        // Sales module then saves in its orders table: code and transaction_id

        return array(
            'shipment' => array(
                'title' => 'Foggyline DynamicRate Shipment',
                'code' => 'dynamicrate_shipment',
                'url_process' => $this->router->generate('foggyline_shipment_dynamic_rate_process'),
                'form' => $form->createView()
            )
        );
    }
}