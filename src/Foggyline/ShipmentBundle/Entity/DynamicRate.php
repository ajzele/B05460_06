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
     * @ORM\Column(name="dynamicrate_type", type="string", length=255)
     */
    private $dynamicrateType;

    /**
     * @var string
     *
     * @ORM\Column(name="dynamicrate_number", type="string", length=255)
     */
    private $dynamicrateNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiry_date", type="date")
     */
    private $expiryDate;

    /**
     * @var string
     *
     * @ORM\Column(name="security_code", type="string", length=255)
     */
    private $securityCode;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dynamicrateType
     *
     * @param string $dynamicrateType
     *
     * @return DynamicRate
     */
    public function setDynamicRateType($dynamicrateType)
    {
        $this->dynamicrateType = $dynamicrateType;

        return $this;
    }

    /**
     * Get dynamicrateType
     *
     * @return string
     */
    public function getDynamicRateType()
    {
        return $this->dynamicrateType;
    }

    /**
     * Set dynamicrateNumber
     *
     * @param string $dynamicrateNumber
     *
     * @return DynamicRate
     */
    public function setDynamicRateNumber($dynamicrateNumber)
    {
        $this->dynamicrateNumber = $dynamicrateNumber;

        return $this;
    }

    /**
     * Get dynamicrateNumber
     *
     * @return string
     */
    public function getDynamicRateNumber()
    {
        return $this->dynamicrateNumber;
    }

    /**
     * Set expiryDate
     *
     * @param \DateTime $expiryDate
     *
     * @return DynamicRate
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    /**
     * Get expiryDate
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set securityCode
     *
     * @param string $securityCode
     *
     * @return DynamicRate
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;

        return $this;
    }

    /**
     * Get securityCode
     *
     * @return string
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }
}

