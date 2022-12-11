<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\SellerPermissionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/seller', [SellerController::class, 'index']);
Route::post('/seller/add', [SellerController::class, 'store']);
Route::get('/seller/add', [SellerController::class, 'add']);
Route::get('/seller/edit/{id}', [SellerController::class, 'edit']);
Route::post('/seller/update/{id}', [SellerController::class, 'update']);
Route::get('/seller/delete/{id}', [SellerController::class, 'delete']);

Route::get('/category', [CategoryController::class, 'index']);
Route::post('/category/add', [CategoryController::class, 'store']);
Route::get('/category/add', [CategoryController::class, 'add']);
Route::get('/category/edit/{id}', [CategoryController::class, 'edit']);
Route::post('/category/update/{id}', [CategoryController::class, 'update']);
Route::get('/category/delete/{id}', [CategoryController::class, 'delete']);

Route::get('/product', [ProductController::class, 'index']);
Route::post('/product/add', [ProductController::class, 'store']);
Route::get('/product/add', [ProductController::class, 'add']);
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/update/{id}', [ProductController::class, 'update']);
Route::get('/product/delete/{id}', [ProductController::class, 'delete']);

Route::get('/permission', [PermissionController::class, 'index']);
Route::post('/permission/add', [PermissionController::class, 'store']);
Route::get('/permission/add', [PermissionController::class, 'add']);
Route::get('/permission/edit/{id}', [PermissionController::class, 'edit']);
Route::post('/permission/update/{id}', [PermissionController::class, 'update']);
Route::get('/permission/delete/{id}', [PermissionController::class, 'delete']);

Route::get('/sellerPermission', [SellerPermissionController::class, 'index']);
Route::post('/sellerPermission/add', [SellerPermissionController::class, 'store']);
Route::get('/sellerPermission/add', [SellerPermissionController::class, 'add']);
Route::get('/sellerPermission/edit/{id}', [SellerPermissionController::class, 'edit']);
Route::post('/sellerPermission/update/{id}', [SellerPermissionController::class, 'update']);
Route::get('/sellerPermission/delete/{id}', [SellerPermissionController::class, 'delete']);
