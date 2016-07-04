<?php

namespace Foggyline\PaymentBundle\Service;

use Foggyline\PaymentBundle\Entity\Card;

class CheckMoneyPayment
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
            'title' => 'Foggyline Check Money Payment',
            'code' => 'check_money',
            'process_url' => $this->router->generate('check_money_process'),
            'form' => ''
        );
    }
}