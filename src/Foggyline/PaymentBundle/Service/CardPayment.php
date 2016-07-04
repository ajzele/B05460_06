<?php

namespace Foggyline\PaymentBundle\Service;

use Foggyline\PaymentBundle\Entity\Card;

class CardPayment
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
        $card = new Card();
        $form = $this->formFactory->create('Foggyline\PaymentBundle\Form\CardType', $card);

        // The sales module should trigger AJAX POST on the process_url
        // the code within the process_url should do the capture, meaning authorize as well
        // once AJAX returns, the success key should return transaction id, or error key should return error message
        // Sales module then saves in its orders table: code and transaction_id

        return array(
            'title' => 'Foggyline Card Payment',
            'code' => 'card_payment',
            'process_url' => $this->router->generate('card_process'),
            'form' => $form->createView()
        );
    }
}