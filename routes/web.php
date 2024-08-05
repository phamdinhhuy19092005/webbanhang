<?php

use App\Controllers\ProductController;
use App\Controllers\UserController;
use Core\Route;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/create', [UserController::class, 'create']);
Route::get('/products', [ProductController::class, 'index']);
