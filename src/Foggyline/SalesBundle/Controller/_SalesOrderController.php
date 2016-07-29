<?php

namespace Foggyline\SalesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;

class SalesOrderController extends Controller
{
    public function cancelAction($id)
    {
        if ($customer = $this->getUser()) {
            $em = $this->getDoctrine()->getManager();
            $salesOrder = $em->getRepository('FoggylineSalesBundle:SalesOrder')
                                ->findOneBy(array('customer' => $customer, 'id' => $id));

            if ($salesOrder->getStatus() != \Foggyline\SalesBundle\Entity\SalesOrder::STATUS_COMPLETE) {
                $salesOrder->setStatus(\Foggyline\SalesBundle\Entity\SalesOrder::STATUS_CANCELED);
                $em->persist($salesOrder);
                $em->flush();
            }
        }

        return $this->redirectToRoute('customer_account');
    }

    public function printAction($id)
    {
        if ($customer = $this->getUser()) {
            $em = $this->getDoctrine()->getManager();
            $salesOrder = $em->getRepository('FoggylineSalesBundle:SalesOrder')
                ->findOneBy(array('customer' => $customer, 'id' => $id));

            return $this->render('FoggylineSalesBundle:default:sales_order/print.html.twig', array(
                'salesOrder' => $salesOrder,
                'customer' => $customer
            ));
        }

        return $this->redirectToRoute('customer_account');
    }
}
