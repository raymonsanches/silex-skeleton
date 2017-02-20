<?php

namespace Arizona\Framework\Provider;

use Arizona\Framework\Resources\DebugUrl;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class RouteServiceProvider implements ServiceProviderInterface
{
    /**
     * Register all routes
     *
     * @param  Container $container
     * @return Void
     */
    public function register(Container $container)
    {
        $container->get('/', new DebugUrl());
    }

    /**
     * Boot
     *
     * @param  Container $container Application instance
     * @return Void
     */
    public function boot(Container $container)
    {
        // Nothing here
    }
}