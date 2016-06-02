<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // foggyline_bucket_homepage
        if (rtrim($pathinfo, '/') === '/foggyline') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'foggyline_bucket_homepage');
            }

            return array (  '_controller' => 'Foggyline\\BucketBundle\\Controller\\DefaultController::indexAction',  '_route' => 'foggyline_bucket_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::aboutAction',  '_route' => 'about',);
        }

        // customer_service
        if ($pathinfo === '/customer-service') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::customerServiceAction',  '_route' => 'customer_service',);
        }

        // orders_returns
        if ($pathinfo === '/orders-and-returns') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::ordersAndReturnsAction',  '_route' => 'orders_returns',);
        }

        // privacy_cookie
        if ($pathinfo === '/privacy-and-cookie-policy') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::privacyAndCookiePolicyAction',  '_route' => 'privacy_cookie',);
        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contact',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
