<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\memberController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', memberController::class);
Route::post('/store', [memberController::class, 'store'])->name('store');
Route::get('/edit/{id}', [memberController::class, 'edit'])->name('edit');
Route::get('/update/{id}', [memberController::class, 'update'])->name('update');
Route::get('/destroy/{id}', [memberController::class, 'destroy'])->name('destroy');