<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SellersController;
use App\Http\Controllers\SellersPermissionsController;

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

Route::resource('/category', CategoriesController::class);
Route::resource('/permission', PermissionsController::class);
Route::resource('/product', ProductsController::class);
Route::resource('/seller', SellersController::class);
Route::resource('/seller_permission', SellersPermissionsController::class);
