<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SellerController;
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

Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::post('/product/tambah', [ProductController::class, 'store'])->name('product');
Route::get('/product/tambah', [ProductController::class, 'add'])->name('product');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product');
Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product');
Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product');


Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::post('/category/tambah', [CategoryController::class, 'store'])->name('category');
Route::get('/category/tambah', [CategoryController::class, 'add'])->name('category');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category');
Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category');

Route::get('/seller', [SellerController::class, 'index'])->name('seller');
Route::post('/seller/tambah', [SellerController::class, 'store'])->name('seller');
Route::get('/seller/tambah', [SellerController::class, 'add'])->name('seller');
Route::get('/seller/edit/{id}', [SellerController::class, 'edit'])->name('seller');
Route::post('/seller/update/{id}', [SellerController::class, 'update'])->name('seller');
Route::get('/seller/delete/{id}', [SellerController::class, 'delete'])->name('seller');

Route::get('/permission', [PermissionController::class, 'index'])->name('permission');
Route::post('/permission/tambah', [PermissionController::class, 'store'])->name('permission');
Route::get('/permission/tambah', [PermissionController::class, 'add'])->name('permission');
Route::get('/permission/edit/{id}', [PermissionController::class, 'edit'])->name('permission');
Route::post('/permission/update/{id}', [PermissionController::class, 'update'])->name('permission');
Route::get('/permission/delete/{id}', [PermissionController::class, 'delete'])->name('permission');

Route::get('/sellerPermission', [PermissionController::class, 'index'])->name('sellerpermission');
Route::post('/sellerPermission/tambah', [SellerPermissionController::class, 'store'])->name('sellerpermission');
Route::get('/sellerPermission/tambah', [SellerPermissionController::class, 'add'])->name('sellerpermission');
Route::get('/sellerPermission/edit/{id}', [SellerPermissionController::class, 'edit'])->name('sellerpermission');
Route::post('/sellerPermission/update/{id}', [SellerPermissionController::class, 'update'])->name('sellerpermission');
Route::get('/sellerPermission/delete/{id}', [SellerPermissionController::class, 'delete'])->name('sellerpermission');