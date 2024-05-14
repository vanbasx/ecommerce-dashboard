<?php

define('ROOT', __DIR__);

require_once ROOT . '/vendor/autoload.php';

use App\App;

$app = new App();

$app->run(); 