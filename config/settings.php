<?php

return [
    'debug' => getenv('APP_CONFIG_DEBUG'),
    'php' => [
        'date.timezone'           => getenv('APP_CONFIG_TIMEZONE'),
        'display_errors'          => getenv('APP_CONFIG_DISPLAY_ERRORS'),
        'display_startup_errors'  => getenv('APP_CONFIG_DISPLAY_STARTUP_ERRORS'),
        'error_reporting'         => 0
    ],
    'webviewdb' => [
        'host'      => getenv('WEBVIEWDB_HOST'),
        'dbname'    => getenv('WEBVIEWDB_DBNAME'),
        'user'      => getenv('WEBVIEWDB_USER'),
        'password'  => getenv('WEBVIEWDB_PASSWORD'),
        'driver'    => 'pdo_mysql',
        'charset'   => 'utf8mb4'
    ]
];
