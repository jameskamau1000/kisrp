<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// PHP 8.4+ tempnam() notices: point temp dir at storage before Composer/Laravel boot.
$kisrpTmp = dirname(__DIR__).'/storage/framework/tmp';
if (! is_dir($kisrpTmp)) {
    @mkdir($kisrpTmp, 0775, true);
}
putenv('TMPDIR='.$kisrpTmp);
$_ENV['TMPDIR'] = $kisrpTmp;
$_SERVER['TMPDIR'] = $kisrpTmp;

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->handleRequest(Request::capture());
