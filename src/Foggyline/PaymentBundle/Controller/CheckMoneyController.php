<?php

namespace Foggyline\PaymentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Foggyline\PaymentBundle\Entity\Card;
use Foggyline\PaymentBundle\Form\CardType;

/**
 * Check Money controller.
 *
 * @Route("/check_money")
 */
class CheckMoneyController extends Controller
{

    /**
     * Creates a new Card entity.
     *
     * @Route("/process", name="check_money_process")
     * @Method({"GET", "POST"})
     */
    public function processAction(Request $request)
    {
        // do something, then return json error or success
    }
}
