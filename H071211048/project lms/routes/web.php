<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\AbsenController;
// use App\Http\Controllers\dashboardcontroller;
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

// Route::get('/', function () {
//     return view('layouts/main');
// });

Route::get('/index', function () {
    return view('dashboard');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/index', [DashboardController::class, 'index']);

    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::get('/tambahDataMahasiswa', [MahasiswaController::class, 'tambahDataMahasiswa'])->name('tambahDataMahasiswa');
    Route::post('/insertData', [MahasiswaController::class, 'insertData'])->name('insertData');
    Route::get('/tampilkanData/{id}', [MahasiswaController::class, 'tampilkanData'])->name('tampilkanData');
    Route::post('/updateData/{id}', [MahasiswaController::class, 'updateData'])->name('updateData');
    Route::get('/hapusData/{id}', [MahasiswaController::class, 'hapusData'])->name('hapusData');
    
    Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');
    Route::get('/tambahDataDosen', [DosenController::class, 'tambahDataDosen'])->name('tambahDataDosen');
    Route::post('/insertDataDosen', [DosenController::class, 'insertDataDosen'])->name('insertDataDosen');
    Route::get('/tampilkanDataDosen/{id}', [DosenController::class, 'tampilkanDataDosen'])->name('tampilkanDataDosen');
    Route::post('/updateDataDosen/{id}', [DosenController::class, 'updateDataDosen'])->name('updateDataDosen');
    Route::get('/hapusDataDosen/{id}', [DosenController::class, 'hapusDataDosen'])->name('hapusDataDosen');
    
    Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');
    
    Route::get('/absen', [AbsenController::class, 'index'])->name('absen');
    
    Route::get('/tugas', [TugasController::class, 'index'])->name('tugas');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
