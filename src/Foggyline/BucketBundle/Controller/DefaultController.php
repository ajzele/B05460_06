<?php

namespace Foggyline\BucketBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FoggylineBucketBundle:Default:index.html.twig');
    }
}
