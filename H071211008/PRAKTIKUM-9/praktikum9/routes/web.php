<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;

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

Route::get('/seller', [SellerController::class, "index"])->name('seller');
Route::get('/tambahseller', [SellerController::class, "tambahseller"])->name('tambahseller');
Route::post('/insertdataseller', [SellerController::class, "insertdataseller"])->name('insertdataseller');
Route::get('/tampilkandataseller/{id}', [SellerController::class, 'tampilkandataseller'])->name('tampilkandataseller');
Route::put('/updatedataseller/{id}', [SellerController::class, 'updatedataseller'])->name('updatedataseller');
Route::get('/deleteseller/{id}', [SellerController::class, 'deleteseller'])->name('deleteseller');

Route::get('/category', [CategoryController::class, "index"])->name('category');
Route::get('/tambahcategory', [CategoryController::class, "tambahcategory"])->name('tambahcategory');
Route::post('/insertdatacategory', [CategoryController::class, "insertdatacategory"])->name('insertdatacategory');
Route::get('/tampilkandatacategory/{id}', [CategoryController::class, 'tampilkandatacategory'])->name('tampilkandatacategory');
Route::put('/updatedatacategory/{id}', [CategoryController::class, 'updatedatacategory'])->name('updatedatacategory');
Route::get('/deletecategory/{id}', [CategoryController::class, 'deletecategory'])->name('deletecategory');

Route::get('/product', [ProductController::class, "index"])->name('product');
Route::get('/tambahproduct', [ProductController::class, "tambahproduct"])->name('tambahproduct');
Route::post('/insertdataproduct', [ProductController::class, "insertdataproduct"])->name('insertdataproduct');
Route::get('/tampilkandataproduct/{id}', [ProductController::class, 'tampilkandataproduct'])->name('tampilkandataproduct');
Route::put('/updatedataproduct/{id}', [ProductController::class, 'updatedataproduct'])->name('updatedataproduct');
Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteproduct'])->name('deleteproduct');

Route::get('/permission', [PermissionController::class, "index"])->name('permission');
Route::get('/tambahpermission', [PermissionController::class, "tambahpermission"])->name('tambahpermission');
Route::post('/insertdatapermission', [PermissionController::class, "insertdatapermission"])->name('insertdatapermission');
Route::get('/tampilkandatapermission/{id}', [PermissionController::class, 'tampilkandatapermission'])->name('tampilkandatapermission');
Route::put('/updatedatapermission/{id}', [PermissionController::class, 'updatedatapermission'])->name('updatedatapermission');
Route::get('/deletepermission/{id}', [PermissionController::class, 'deletepermission'])->name('deletepermission');

