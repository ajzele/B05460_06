<?php

namespace Foggyline\SalesBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;

class OverrideServiceCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        // Override the core module 'add_to_cart_url' service
        $container->removeDefinition('add_to_cart_url');
        $container->setDefinition('add_to_cart_url', $container->getDefinition('foggyline_sales.add_to_cart_url'));

        // Override the core module 'checkout_menu' service
        $container->removeDefinition('checkout_menu');
        $container->setDefinition('checkout_menu', $container->getDefinition('foggyline_sales.checkout_menu'));


        $container->removeDefinition('foggyline_customer.customer_orders');
        $container->setDefinition('foggyline_customer.customer_orders', $container->getDefinition('foggyline_sales.customer_orders'));

        $container->removeDefinition('bestsellers');
        $container->setDefinition('bestsellers', $container->getDefinition('foggyline_sales.bestsellers'));

        $container->getDefinition('foggyline_sales.shipment')
            ->addArgument(
                array_keys($container->findTaggedServiceIds('shipment_method'))
            );

        $container->getDefinition('foggyline_sales.payment')
            ->addArgument(
                array_keys($container->findTaggedServiceIds('payment_method'))
            );

    }
}