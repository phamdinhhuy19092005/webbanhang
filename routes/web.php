<?php

use App\Controllers\Frontend\HomeController;
use App\Controllers\Frontend\ProductController;
use App\Controllers\Frontend\UserController;
use Core\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::get('/products', [ProductController::class, 'index']);
