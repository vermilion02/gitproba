<?php

set_include_path(get_include_path() . PATH_SEPARATOR . 'E:\obroci_domaci\internet-tehnologije-2024-projekat-app_za_planiranje_obroka_2021_0271\app-obroci');

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
