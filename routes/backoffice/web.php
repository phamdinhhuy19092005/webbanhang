<?php

use App\Controllers\Backoffice\DashboardController;
use App\Controllers\Backoffice\ProductController;
use App\Controllers\Backoffice\UserController;
use App\Controllers\Backoffice\CategoriesController;
use App\Controllers\Backoffice\CategoriesGroupController;
use App\Controllers\Backoffice\AttributeController;
use App\Controllers\Backoffice\AttributeValuesController;
use App\Controllers\Backoffice\InventoriesController;
use App\Controllers\Backoffice\CollectionController;



use Core\Route;

Route::get('/backoffice', [DashboardController::class, 'index']);

// Sản phẩm
Route::get('/backoffice/products', [ProductController::class, 'index']);
Route::get('/backoffice/products/create', [ProductController::class, 'create']);
Route::get('/backoffice/products/edit', [ProductController::class, 'edit']);
Route::get('/backoffice/products/show', [ProductController::class, 'show']);

// Khách hàng
Route::get('/backoffice/users', [UserController::class, 'index']);
Route::get('/backoffice/users/create', [UserController::class, 'create']);
Route::get('/backoffice/users/edit', [UserController::class, 'edit']);
Route::get('/backoffice/users/show', [UserController::class, 'show']);

// Danh mục
Route::get('/backoffice/categories', [CategoriesController::class, 'index']);
Route::get('/backoffice/categories/create', [CategoriesController::class, 'create']);
Route::get('/backoffice/categories/edit', [CategoriesController::class, 'edit']);

// Nhóm danh mục
Route::get('/backoffice/category-groups', [CategoriesGroupController::class, 'index']);
Route::get('/backoffice/category-groups/create', [CategoriesGroupController::class, 'create']);
Route::get('/backoffice/category-groups/edit', [CategoriesGroupController::class, 'edit']);

// Thuộc tính
Route::get('/backoffice/attributes', [AttributeController::class, 'index']);
Route::get('/backoffice/attributes/create', [AttributeController::class, 'create']);
Route::get('/backoffice/attributes/edit', [AttributeController::class, 'edit']);

// Biến thể
Route::get('/backoffice/attribute-values', [AttributeValuesController::class, 'index']);
Route::get('/backoffice/attribute-values/create', [AttributeValuesController::class, 'create']);
Route::get('/backoffice/attribute-values/edit', [AttributeValuesController::class, 'edit']);

// Kho sản phẩm
Route::get('/backoffice/inventories', [InventoriesController::class, 'index']);

// Bộ sưu tập
Route::get('/backoffice/collections', [CollectionController::class, 'index']);
Route::get('/backoffice/collections/create', [CollectionController::class, 'create']);
Route::get('/backoffice/collections/edit', [CollectionController::class, 'edit']);


