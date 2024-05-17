<?php

use App\Router\Route;

return [
   Route::get('/ecommerce-dashboard/home', function() {
      include_once ROOT . '/views/pages/home.php';
   }),
   Route::get('/ecommerce-dashboard/overview', function() {
      include_once ROOT . '/views/pages/overview.php';
   }),
];