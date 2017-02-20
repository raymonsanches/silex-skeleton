<?php

namespace Arizona\Framework\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Silex\Provider\DoctrineServiceProvider as DoctrineProvider;

class DoctrineServiceProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container->register(new DoctrineProvider(), [
            'dbs.options' => [
                'webviewdb' => $container['webviewdb']
            ]
        ]);
    }

    public function boot(Container $container)
    {
        // Nothing here
    }
}
