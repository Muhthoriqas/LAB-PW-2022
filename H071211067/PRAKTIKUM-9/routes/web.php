<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\sellersController;
use App\Http\Controllers\permissionsController;
use App\Http\Controllers\productsController;
use App\Http\Controllers\sellers_permissionsController;
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
Route::resource('/sellers', sellersController::class);
Route::resource('/sellers_permissions', sellers_permissionsController::class);
Route::resource('/permissions', permissionsController::class);
Route::resource('/products', ProductsController::class);
Route::resource('/categories', categoriesController::class);


