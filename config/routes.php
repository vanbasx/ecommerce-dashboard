<?php

use App\Controllers\HomeController;
use App\Controllers\OverviewController;
use App\Kernel\Router\Route;

return [
   Route::get('/ecommerce-dashboard/public/home', [HomeController::class, 'index']),
   Route::get('/ecommerce-dashboard/public/overview', [OverviewController::class, 'index']),
];