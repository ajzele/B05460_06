<?php

namespace Foggyline\ShipmentBundle\Controller;

use Foggyline\ShipmentBundle\Entity\DynamicRate;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DynamicRateController extends Controller
{
    public function processAction(Request $request)
    {
//        $dynamicRate = new DynamicRate();
//
//        $form = $this->createFormBuilder($dynamicRate)
//            ->add('delivery_options', ChoiceType::class, array(
//                'choices' => array(
//                    'English' => 'en',
//                    'Spanish' => 'es',
//                    'Bork'   => 'muppets',
//                    'Pirate' => 'arr'
//                ),
//                'expanded' => true,
//            ))
//            ->getForm();


        $shipment = $this->get('foggyline_shipment.dynamicrate_shipment');
        $info = $shipment->getInfo();

        return $this->render('FoggylineShipmentBundle:default:dynamic_rate/new.html.twig', array(
            //'form' => $form->createView(),
            'form' => $info['shipment']['form'],
        ));


        // Incoming request should/might contain the DynamicRateType form
        // Imagine we are calling the real shipment processor API here, and getting some transaction id back
        $transaction = md5(time() . uniqid()); // Just a dummy string, simulating some transaction id, if any

        if ($transaction) {
            return new JsonResponse(array(
                'success' => $transaction
            ));
        }

        return new JsonResponse(array(
            'error' => 'Error occurred while processing DynamicRate shipment.'
        ));
    }


}
