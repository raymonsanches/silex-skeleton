<?php

$application = require_once __DIR__.'/../bootstrap.php';

use Arizona\Framework\Framework;

/**
 * Default bundle with several pre-configured providers
 * to bootstrap an application
 */
$application->register(new Framework());

$application->run();