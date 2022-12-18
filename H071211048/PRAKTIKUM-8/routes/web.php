<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\PermissionController;

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

Route::get('/', function() {
    return view('welcome');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/tambahDataMahasiswa', [MahasiswaController::class, 'tambahDataMahasiswa'])->name('tambahDataMahasiswa');
Route::post('/insertData', [MahasiswaController::class, 'insertData'])->name('insertData');

Route::get('/tampilkanData/{id}', [MahasiswaController::class, 'tampilkanData'])->name('tampilkanData');
Route::post('/updateData/{id}', [MahasiswaController::class, 'updateData'])->name('updateData');

Route::get('/hapusData/{id}', [MahasiswaController::class, 'hapusData'])->name('hapusData');