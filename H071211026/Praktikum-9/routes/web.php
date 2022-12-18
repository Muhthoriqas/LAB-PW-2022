<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\sellerController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\permissionController;
use App\Http\Controllers\sellerPermissionController;



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

//------------------------------------------------PRODUCTS-----------------------------------------------------------------

Route::get('/products', [productController::class, 'showProduct']); // ELOQUENT
Route::post('saveProductUseEloquent', [productController::class, 'saveProductUseEloquent']); // ELOQUENT
Route::post('editProductUseEloquent/{id}', [productController::class, 'editProductUseEloquent']); // ELOQUENT
Route::get('deleteProductUseQueryBuilder/{id}', [productController::class, 'deleteProductUseQueryBuilder']); // QUERY BUILDER

// ------------------------------------------------------------------------------------------------------------------------


// ----------------------------------------------SELLER--------------------------------------------------------------------
Route::get('/sellers', [sellerController::class, 'showSeller']); // ELOQUENT
Route::post('saveSellerUseEloquent', [sellerController::class, 'saveSellerUseEloquent']); // ELOQUENT
Route::post('editSellerUseEloquent/{id}', [sellerController::class, 'editSellerUseEloquent']); // ELOQUENT
Route::get('deleteSellerUseQueryBuilder/{id}', [sellerController::class, 'deleteSellerUseQueryBuilder']); // QUERY BUILDER
// --------------------------------------------------------------------------------------------------------------------------

// ------------------------------------------CATEGORY------------------------------------------------------------------------
Route::get('/category', [categoryController::class, 'showCategory']); // ELOQUENT
Route::post('saveCategoryUseEloquent', [categoryController::class, 'saveCategoryUseEloquent']); // ELOQUENT
Route::post('editCategoryUseEloquent/{id}', [categoryController::class, 'editCategoryUseEloquent']); // ELOQUENT
Route::get('deleteCategoryUseQueryBuilder/{id}', [categoryController::class, 'deleteCategoryUseQueryBuilder']); // QUERY BUILDER
// --------------------------------------------------------------------------------------------------------------------------

// -------------------------------------------PERMISSION---------------------------------------------------------------------
Route::get('/permission', [permissionController::class, 'showPermission']); // ELOQUENT
Route::post('savePermissionUseEloquent', [permissionController::class, 'savePermissionUseEloquent']); // ELOQUENT
Route::post('editPermissionUseEloquent/{id}', [permissionController::class, 'editPermissionUseEloquent']); // ELOQUENT
Route::get('deletePermissionUseQueryBuilder/{id}', [permissionController::class, 'deletePermissionUseQueryBuilder']); // QUERY BUILDER
// ----------------------------------------------------------------------------------------------------------------------------

// ----------------------------------------------SELLER PERMISSION------------------------------------------------------------
Route::get('/seller_permission', [sellerPermissionController::class, 'showS_Permission']); // ELOQUENT
Route::post('saveS_PermissionUseQueryBuilder', [sellerPermissionController::class, 'saveS_PermissionUseQueryBuilder']); // ELOQUENT
Route::post('editS_PermissionUseQueryBuilder/{id}', [sellerPermissionController::class, 'editS_PermissionUseQueryBuilder']); // ELOQUENT
Route::get('deleteS_PermissionUseQueryBuilder/{id}', [sellerPermissionController::class, 'deleteS_PermissionUseQueryBuilder']); // QUERY BUILDER
// ----------------------------------------------------------------------------------------------------------------------------