<?php

namespace AppBundle\Service\Menu;

class BestSellers
{
    public function getItems()
    {
        // Note, this can be arranged as per some "Product" interface, so to know what dummy data to return
        return array(
            array('path' => 'iphone', 'name' => 'iPhone', 'img' => '/img/missing-image.png', 'price' => 49.99, 'id' => '#'),
            array('path' => 'lg', 'name' => 'LG', 'img' => '/img/missing-image.png', 'price' => 19.99, 'id' => '#'),
            array('path' => 'samsung', 'name' => 'Samsung', 'img' => '/img/missing-image.png', 'price' => 29.99, 'id' => '#'),
            array('path' => 'lumia', 'name' => 'Lumia', 'img' => '/img/missing-image.png', 'price' => 19.99, 'id' => '#'),
            array('path' => 'edge', 'name' => 'Edge', 'img' => '/img/missing-image.png', 'price' => 39.99, 'id' => '#'),
        );
    }
}
