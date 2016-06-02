<?php

namespace Foggyline\BucketBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class FoggylineBucketBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new \Foggyline\BucketBundle\DependencyInjection\Compiler\OverrideServiceCompilerPass());
    }
}
