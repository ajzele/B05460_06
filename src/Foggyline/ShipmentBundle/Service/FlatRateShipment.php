<?php

namespace Foggyline\ShipmentBundle\Service;

class FlatRateShipment
{
    private $router;

    public function __construct(
        \Symfony\Bundle\FrameworkBundle\Routing\Router $router
    )
    {
        $this->router = $router;
    }

    public function getInfo()
    {
        return array(
            'shipment' => array(
                'title' => 'Foggyline FlatRate Shipment',
                'code' => 'flat_rate',
                'url_process' => $this->router->generate('foggyline_shipment_flat_rate_process'),
                //'form' => ''
            )
        );
    }
}