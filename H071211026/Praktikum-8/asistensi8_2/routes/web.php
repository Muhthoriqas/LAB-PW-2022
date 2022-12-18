<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/index', [MahasiswaController::class, 'index'])->name('index');
Route::get('/create', [MahasiswaController::class, 'create'])->name('create');
Route::post('/add', [MahasiswaController::class, 'store'])->name('add');
Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [MahasiswaController::class, 'update'])->name('update');
Route::get('/delete/{id}', [MahasiswaController::class, 'destroy'])->name('delete');


