<?php

use App\Controllers\HomeController;
use App\Controllers\OverviewController;
use App\Router\Route;

return [
   Route::get('/ecommerce-dashboard/home', [HomeController::class, 'index']),
   Route::get('/ecommerce-dashboard/overview', [OverviewController::class, 'index']),
];