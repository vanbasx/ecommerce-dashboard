<?php

define('ROOT', dirname(__DIR__));

require_once ROOT . '/vendor/autoload.php';

use App\Kernel\App;

$app = new App();

$app->run(); 