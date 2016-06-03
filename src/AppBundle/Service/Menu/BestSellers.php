<?php

namespace AppBundle\Service\Menu;

class BestSellers
{
    public function getItems()
    {
        return array(
            array('path' => 'iphone', 'name' => 'iPhone', 'img' => '/img/missing-image.png', 'price' => 49.99),
            array('path' => 'lg', 'name' => 'LG', 'img' => '/img/missing-image.png', 'price' => 19.99),
            array('path' => 'samsung', 'name' => 'Samsung', 'img' => '/img/missing-image.png', 'price' => 29.99),
            array('path' => 'lumia', 'name' => 'Lumia', 'img' => '/img/missing-image.png', 'price' => 19.99),
            array('path' => 'edge', 'name' => 'Edge', 'img' => '/img/missing-image.png', 'price' => 39.99),
        );
    }
}
