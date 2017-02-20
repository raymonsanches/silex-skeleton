<?php

namespace Arizona\Framework\Resources;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class DebugUrl
{
    public function __invoke(Request $request, Application $application)
    {
        if ($application['debug'] === true) {
            return phpinfo();
        }
        return $application->json('Resource Not Found', 404);
    }
}