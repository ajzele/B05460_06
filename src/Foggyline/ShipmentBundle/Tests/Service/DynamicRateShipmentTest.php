<?php

namespace Foggyline\ShipmentBundle\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DynamicRateShipmentTest extends KernelTestCase
{
    private $container;
    private $formFactory;
    private $router;

    public function setUp()
    {
        static::bootKernel();
        $this->container = static::$kernel->getContainer();
        $this->formFactory = $this->container->get('form.factory');
        $this->router = $this->container->get('router');
    }

    public function testGetInfoViaService()
    {
        $shipment = $this->container->get('foggyline_shipment.dynamic_rate_shipment');
        $info = $shipment->getInfo();
        $this->assertNotEmpty($info);
        $this->assertNotEmpty($info['shipment']['form']);
    }

    public function testGetInfoViaClass()
    {
        $shipment = new \Foggyline\ShipmentBundle\Service\DynamicRateShipment(
            $this->formFactory,
            $this->router
        );

        $info = $shipment->getInfo();
        $this->assertNotEmpty($info);
        $this->assertNotEmpty($info['shipment']['form']);
    }
}
