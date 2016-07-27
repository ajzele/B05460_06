<?php

namespace Foggyline\SalesBundle\Service;

class Shipment
{
    private $container;
    private $methods;

    public function __construct($container, $methods)
    {
        //$methods//array(2) { [0]=> string(39) "foggyline_shipment.dynamicrate_shipment" [1]=> string(28) "foggyline_shipment.flat_rate" }
        $this->container = $container;
        $this->methods = $methods;
    }

    public function getAvailableMethods()
    {
        $methods = array();

        foreach ($this->methods as $_method) {
            $methods[] = $this->container->get($_method);
        }

        return $methods;
    }
}