<?php

define('DS', DIRECTORY_SEPARATOR);
define('APP_ROOT', realpath(__DIR__));
define('COMMANDS', APP_ROOT . '/bin');

include_once __DIR__.'/vendor/autoload.php';

return call_user_func(function () {
    $settings = require_once __DIR__ . '/config/settings.php';

    foreach ($settings['php'] as $key => $value) {
        ini_set($key, $value);
    }

    $settings['debug'] = (bool) $settings['debug'];

    if ($settings['debug']) {
        ini_set('display_errors', true);
        ini_set('display_startup_errors', true);
        ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_DEPRECATED);
    }

    $application = new Silex\Application($settings);

    return $application;
});