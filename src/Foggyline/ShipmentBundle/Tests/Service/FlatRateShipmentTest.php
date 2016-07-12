<?php

namespace Foggyline\ShipmentBundle\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class FlatRateShipmentTest extends KernelTestCase
{
    private $container;
    private $router;

    public function setUp()
    {
        static::bootKernel();
        $this->container = static::$kernel->getContainer();
        $this->router = $this->container->get('router');
    }

    public function testGetInfoViaService()
    {
        $shipment = $this->container->get('foggyline_shipment.flat_rate');
        $info = $shipment->getInfo();
        $this->assertNotEmpty($info);
    }

    public function testGetInfoViaClass()
    {
        $shipment = new \Foggyline\ShipmentBundle\Service\FlatRateShipment(
            $this->router
        );

        $info = $shipment->getInfo();
        $this->assertNotEmpty($info);
    }
}
