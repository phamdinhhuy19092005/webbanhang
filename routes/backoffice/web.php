<?php

use App\Controllers\Backoffice\DashboardController;
use App\Controllers\Backoffice\ProductController;
use Core\Route;

Route::get('/backoffice', [DashboardController::class, 'index']);

Route::get('/backoffice/products', [ProductController::class, 'index']);
Route::get('/backoffice/products/create', [ProductController::class, 'create']);
Route::get('/backoffice/products/edit', [ProductController::class, 'edit']);
Route::get('/backoffice/products/show', [ProductController::class, 'show']);