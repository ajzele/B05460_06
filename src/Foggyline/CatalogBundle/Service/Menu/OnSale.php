<?php

namespace Foggyline\CatalogBundle\Service\Menu;

class OnSale
{
    private $em;
    private $router;

    public function __construct(\Doctrine\ORM\EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    public function getItems()
    {
        $products = array();
        $_products = $this->em->getRepository('FoggylineCatalogBundle:Product')->findBy(array('onsale' => true));

        foreach ($_products as $_product) {
            /* @var $_product \Foggyline\CatalogBundle\Entity\Product */
            $products[] = array(
                'path' => $_product->getUrlKey(),
                'name' => $_product->getTitle(),
                'img' => $_product->getImage(),
                'price' => $_product->getPrice(),
                'add_to_cart_url' => $_product->getUrlKey(),
            );
        }

        return $products;
    }
}
