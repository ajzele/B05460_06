<?php

namespace Foggyline\CatalogBundle\Service\Menu;

class Category
{
    private $em;

    public function __construct(\Doctrine\ORM\EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    public function getItems()
    {
        $categories = array();
        $_categories = $this->em->getRepository('FoggylineCatalogBundle:Category')->findAll();

        foreach ($_categories as $_category) {
            /* @var $_category \Foggyline\CatalogBundle\Entity\Category */
            $categories[] = array(
                'path' => $_category->getUrlKey(),
                'label' => $_category->getTitle(),
            );
        }

        return $categories;
    }
}
