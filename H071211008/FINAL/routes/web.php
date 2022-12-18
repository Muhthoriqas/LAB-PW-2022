<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\makananController;
use App\Http\Controllers\pesananController;
use App\Http\Controllers\tagController;
use App\Http\Controllers\userController;

use App\Http\Controllers\homepageController;
use App\Http\Controllers\listMakananController;
use App\Http\Controllers\listCategoryController;
use App\Http\Controllers\keranjangOrderController;


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

// Route::get('/', function() {
//     return view('welcome');
// });

Route::get('/dashboard', [dashboardController::class, 'index']);

Route::get('/makanan', [makananController::class, 'index']);

Route::get('/category', [categoryController::class, 'index']);

Route::get('/pesanan', [pesananController::class, 'index']);

Route::get('/tag', [tagController::class, 'index']);

Route::get('/user', [userController::class, 'index']);

Route::get('/homepage', [homepageController::class, 'index']);

Route::get('/listMakanan', [listMakananController::class, 'index']);

Route::get('/listCategory', [listCategoryController::class, 'index']);

Route::get('/keranjangOrder', [keranjangOrderController::class, 'index']);

Auth::routes();

Route::get("/test", function() {
    return view("admin.test");
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
