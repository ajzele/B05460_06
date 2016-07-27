<?php

namespace Foggyline\SalesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;

class CheckoutController extends Controller
{
    public function indexAction(Request $request)
    {
        // Fetch current logged in customer
        if ($customer = $this->getUser()) {

            $form = $this->createFormBuilder()
                ->add('address_first_name', TextType::class, array())
                ->add('address_last_name', TextType::class, array())
                ->add('company', TextType::class, array())
                ->add('address_telephone', TextType::class, array())
                ->add('address_country', CountryType::class, array())
                ->add('address_state', TextType::class, array())
                ->add('address_city', TextType::class, array())
                ->add('address_postcode', TextType::class, array())
                ->add('address_street', TextType::class, array())
                ->getForm();

            $em = $this->getDoctrine()->getManager();
            $cart = $em->getRepository('FoggylineSalesBundle:Cart')->findOneBy(array('customer' => $customer));
            $items = $cart->getItems();
            $total = null;

            foreach ($items as $item) {
                $total += floatval($item->getQty() * $item->getUnitPrice());
            }

            return $this->render('FoggylineSalesBundle:default:checkout/index.html.twig', array(
                'customer' => $customer,
                'items' => $items,
                'total' => $total,
                'shipping_address_form' => $form->createView(),
                'shipping_methods' => $this->get('foggyline_sales.shipment')->getAvailableMethods()
            ));
        } else {
            $this->addFlash('warning', 'Only logged in customers can access cart page.');
            return $this->redirectToRoute('foggyline_customer_login');
        }
    }

    public function paymentAction(Request $request)
    {
        echo '<pre>'; print_r($_POST); exit;

        // Fetch current logged in customer
        if ($customer = $this->getUser()) {

            $form = $this->createFormBuilder()
                ->add('address_first_name', TextType::class, array())
                ->add('address_last_name', TextType::class, array())
                ->add('company', TextType::class, array())
                ->add('address_telephone', TextType::class, array())
                ->add('address_country', CountryType::class, array())
                ->add('address_state', TextType::class, array())
                ->add('address_city', TextType::class, array())
                ->add('address_postcode', TextType::class, array())
                ->add('address_street', TextType::class, array())
                ->getForm();

            $em = $this->getDoctrine()->getManager();
            $cart = $em->getRepository('FoggylineSalesBundle:Cart')->findOneBy(array('customer' => $customer));
            $items = $cart->getItems();
            $total = null;

            foreach ($items as $item) {
                $total += floatval($item->getQty() * $item->getUnitPrice());
            }

            return $this->render('FoggylineSalesBundle:default:checkout/index.html.twig', array(
                'customer' => $customer,
                'items' => $items,
                'total' => $total,
                'shipping_address_form' => $form->createView(),
                'shipping_methods' => $this->get('foggyline_sales.shipment')->getAvailableMethods()
            ));
        } else {
            $this->addFlash('warning', 'Only logged in customers can access cart page.');
            return $this->redirectToRoute('foggyline_customer_login');
        }
    }

    public function successAction()
    {

        return $this->render('FoggylineSalesBundle:default:checkout/success.html.twig', array(

        ));
    }
}
