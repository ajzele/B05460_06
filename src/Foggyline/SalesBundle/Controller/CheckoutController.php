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

            $form = $this->getAddressForm();

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
                'cart_subtotal' => $total,
                'shipping_address_form' => $form->createView(),
                'shipping_methods' => $this->get('foggyline_sales.shipment')->getAvailableMethods()
            ));
        } else {
            $this->addFlash('warning', 'Only logged in customers can access checkout page.');
            return $this->redirectToRoute('foggyline_customer_login');
        }
    }

    private function getAddressForm()
    {
        return $this->createFormBuilder()
            ->add('address_first_name', TextType::class, array('required' => true))
            ->add('address_last_name', TextType::class, array('required' => true))
            ->add('company', TextType::class, array())
            ->add('address_telephone', TextType::class, array('required' => true))
            ->add('address_country', CountryType::class, array('required' => true))
            ->add('address_state', TextType::class, array())
            ->add('address_city', TextType::class, array('required' => true))
            ->add('address_postcode', TextType::class, array('required' => true))
            ->add('address_street', TextType::class, array('required' => true))
            ->getForm();
    }

    public function paymentAction(Request $request)
    {
        /**
         * Array
         * (
         * [form] => Array
         * (
         * [address_first_name] => Cvjetkova ulica 10
         * [address_last_name] =>
         * [company] =>
         * [address_telephone] => +385911550931
         * [address_country] => HR
         * [address_state] =>
         * [address_city] => Osijek
         * [address_postcode] => 31000
         * [address_street] =>
         * [_token] => wGCQE7nq_ZFWZnLUAckPqB1n6hTw7Rj49cham0U4dBk
         * )
         *
         * [shipment_method] => flat_rate____fixed
         * )
         */

        $addressForm = $this->getAddressForm();
        $addressForm->handleRequest($request);

        if ($addressForm->isSubmitted() && $addressForm->isValid() && $customer = $this->getUser()) {

            $em = $this->getDoctrine()->getManager();
            $cart = $em->getRepository('FoggylineSalesBundle:Cart')->findOneBy(array('customer' => $customer));
            $items = $cart->getItems();
            $cartSubtotal = null;

            foreach ($items as $item) {
                $cartSubtotal += floatval($item->getQty() * $item->getUnitPrice());
            }


            //echo '<pre>'; print_r($_POST); exit;

            $deliveryTotal = 9.99;
            $totalPrice = $cartSubtotal + $deliveryTotal;

            $checkoutInfo = $addressForm->getData();
            unset($checkoutInfo['_token']);
            $checkoutInfo['shipment_method'] = $_POST['shipment_method'];
            $checkoutInfo['shipment_price'] = $deliveryTotal;
            $checkoutInfo['items_price'] = $cartSubtotal;
            $checkoutInfo['total_price'] = $cartSubtotal + $deliveryTotal;

//            $salesOrderData['']

            $this->get('session')->set('checkoutInfo', $checkoutInfo);

            return $this->render('FoggylineSalesBundle:default:checkout/payment.html.twig', array(
                'customer' => $customer,
                'items' => $items,
                'cart_subtotal' => $cartSubtotal,
                'delivery_subtotal' => $deliveryTotal,
                'delivery_label' => 'Delivery Label Here',
                'order_total' => $totalPrice,
                'payment_methods' => $this->get('foggyline_sales.payment')->getAvailableMethods()
            ));
        } else {
            $this->addFlash('warning', 'Only logged in customers can access checkout page.');
            return $this->redirectToRoute('foggyline_customer_login');
        }
    }

    public function processAction(Request $request)
    {
        if ($customer = $this->getUser()) {

            $em = $this->getDoctrine()->getManager();
            // Merge all the checkout info, for SalesOrder
            $checkoutInfo = $this->get('session')->get('checkoutInfo');
            $now = new \DateTime();

            // Create Sales Order
            $salesOrder = new \Foggyline\SalesBundle\Entity\SalesOrder();
            $salesOrder->setCustomer($customer);
            $salesOrder->setItemsPrice($checkoutInfo['items_price']);
            $salesOrder->setShipmentPrice($checkoutInfo['shipment_price']);
            $salesOrder->setTotalPrice($checkoutInfo['total_price']);
            $salesOrder->setPaymentMethod($_POST['payment_method']);
            $salesOrder->setShipmentMethod($checkoutInfo['shipment_method']);
            $salesOrder->setCreatedAt($now);
            $salesOrder->setModifiedAt($now);
            $salesOrder->setCustomerEmail($customer->getEmail());
            $salesOrder->setCustomerFirstName($customer->getFirstName());
            $salesOrder->setCustomerLastName($customer->getLastName());
            $salesOrder->setAddressFirstName($checkoutInfo['address_first_name']);
            $salesOrder->setAddressLastName($checkoutInfo['address_last_name']);
            $salesOrder->setAddressCountry($checkoutInfo['address_country']);
            $salesOrder->setAddressState($checkoutInfo['address_state']);
            $salesOrder->setAddressCity($checkoutInfo['address_city']);
            $salesOrder->setAddressPostcode($checkoutInfo['address_postcode']);
            $salesOrder->setAddressStreet($checkoutInfo['address_street']);
            $salesOrder->setAddressTelephone($checkoutInfo['address_telephone']);
            $salesOrder->setStatus(\Foggyline\SalesBundle\Entity\SalesOrder::STATUS_PROCESSING);

            $em->persist($salesOrder);
            $em->flush();


            // Foreach cart item, create order item, and delete cart item
            $cart = $em->getRepository('FoggylineSalesBundle:Cart')->findOneBy(array('customer' => $customer));
            $items = $cart->getItems();

            foreach ($items as $item) {
                $orderItem = new \Foggyline\SalesBundle\Entity\SalesOrderItem();

                $orderItem->setSalesOrder($salesOrder);
                $orderItem->setTitle($item->getProduct()->getTitle());
                $orderItem->setQty($item->getQty());
                $orderItem->setUnitPrice($item->getUnitPrice());
                $orderItem->setTotalPrice($item->getQty() * $item->getUnitPrice());
                $orderItem->setModifiedAt($now);
                $orderItem->setCreatedAt($now);
                $orderItem->setProduct($item->getProduct());

                $em->persist($orderItem);
                $em->remove($item);
            }

            $em->remove($cart);
            $em->flush();


            $this->get('session')->set('last_order', $salesOrder->getId());

            return $this->redirectToRoute('foggyline_sales_checkout_success');


            // Copy CartItem into SalesOrderItem

            // Clear Cart and CartItem(s)

            // Redirect to success page

        } else {
            $this->addFlash('warning', 'Only logged in customers can access checkout page.');
            return $this->redirectToRoute('foggyline_customer_login');
        }

        echo '<pre>';
        print_r($_POST);
        exit;

        /**
         * [payment_method] => card_payment
         * [card] => Array
         * (
         * [cardType] => VISA
         * [cardNumber] => 123456
         * [expiryDate] => Array
         * (
         * [month] => 1
         * [day] => 1
         * [year] => 2011
         * )
         *
         * [securityCode] =>
         * [_token] => Ts2jewNqfpnLZ2eiUeCiQ5p2YoAheUaMg2mRSObeAbc
         * )
         */
    }

    public function successAction()
    {

        return $this->render('FoggylineSalesBundle:default:checkout/success.html.twig', array(
            'last_order' => $this->get('session')->get('last_order')
        ));
    }
}
