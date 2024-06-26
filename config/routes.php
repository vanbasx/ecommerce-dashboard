<?php

use App\Controllers\HomeController;
use App\Controllers\OverviewController;
use App\Controllers\ProductsController;
use App\Controllers\ProfileController;
use App\Kernel\Router\Route;

return [
   Route::get('/ecommerce-dashboard/public/home', [HomeController::class, 'index']),
   Route::get('/ecommerce-dashboard/public/admin/overview', [OverviewController::class, 'index']),
   Route::get('/ecommerce-dashboard/public/admin/products', [ProductsController::class, 'index']),
   Route::get('/ecommerce-dashboard/public/admin/products/add', [ProductsController::class, 'add']),
   Route::post('/ecommerce-dashboard/public/admin/products/add', [ProductsController::class, 'store']),
   Route::get('/ecommerce-dashboard/public/admin/profile', [ProfileController::class, 'index']),
];