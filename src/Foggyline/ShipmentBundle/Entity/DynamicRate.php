<?php

namespace Foggyline\ShipmentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DynamicRate
 *
 * @ORM\Table(name="dynamicrate")
 * @ORM\Entity(repositoryClass="Foggyline\ShipmentBundle\Repository\DynamicRateRepository")
 */
class DynamicRate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_options", type="string", length=255, unique=false)
     */
    private $deliveryOptions;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function getDeliveryOptions()
    {
        return $this->deliveryOptions;
    }
}

