<?php

namespace Arizona\Framework;

use Arizona\Framework\Provider\DoctrineServiceProvider;
use Arizona\Framework\Provider\RouteServiceProvider;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class Framework implements ServiceProviderInterface
{
    /**
     * @param Container $container
     * @return Void
     */
    public function register(Container $container)
    {
        $container->register(new DoctrineServiceProvider());
        $container->register(new RouteServiceProvider());
    }
}