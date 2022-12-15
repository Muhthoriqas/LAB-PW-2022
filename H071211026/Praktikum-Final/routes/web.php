<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\MatakuliahController;
use App\Http\Controllers\KelasMatakuliahController;

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

Route::get('/login', [AkunController::class, 'view'])->middleware('guest')->name('login');
Route::post('/login', [AkunController::class, 'login']);

Route::post('/logout', [AkunController::class, 'logout']);

Route::get('/dashboard', [AkunController::class, 'dashboard'])->middleware('auth');

Route::get('/akun', [AkunController::class, 'dosen'])->middleware('auth');

Route::post('/tambahdosen', [AkunController::class, 'tambahdosen'])->middleware('auth');
Route::get('/dosen/{id}', [AkunController::class, 'detaildosen'])->middleware('auth');
Route::post('/updatedosen/{id}', [AkunController::class, 'updatedosen'])->middleware('auth');
Route::get('/deletedosen/{id}', [AkunController::class, 'deletedosen'])->middleware('auth');

Route::post('/tambahmhs', [AkunController::class, 'tambahmhs'])->middleware('auth');
Route::get('/mhs/{id}', [AkunController::class, 'detailmhs'])->middleware('auth');
Route::post('/updatemhs/{id}', [AkunController::class, 'updatemhs'])->middleware('auth');
Route::get('/deletemhs/{id}', [AkunController::class, 'deletemhs'])->middleware('auth');

Route::get('/matakuliah', [MatakuliahController::class, 'matakuliah'])->middleware('auth');
Route::post('/tambahmatakuliah', [MatakuliahController::class, 'tambahmatakuliah'])->middleware('auth');
Route::post('/updatematakuliah/{id}', [MatakuliahController::class, 'updatematakuliah'])->middleware('auth');
Route::get('/deletematakuliah/{id}', [MatakuliahController::class, 'deletematakuliah'])->middleware('auth');

Route::get('/matakuliah/{id}', [KelasController::class, 'index'])->middleware('auth');
Route::post('/tambahkelas', [KelasController::class, 'tambahkelas'])->middleware('auth');
Route::post('/daftarkelas/{id}', [KelasController::class, 'daftarkelas'])->middleware('auth');
Route::post('/updatekelas/{id}', [KelasController::class, 'updatekelas'])->middleware('auth');
Route::get('/deletekelas/{id}', [KelasController::class, 'deletekelas'])->middleware('auth');

Route::get('/tugas/{id}', [TugasController::class, 'index'])->middleware('auth');
Route::post('/tambahtugas', [TugasController::class, 'tambahtugas'])->middleware('auth');

Route::get('/mhsmatkul', [MatakuliahController::class, 'matakuliah'])->middleware('auth');
Route::post('/uptugas/{id}', [TugasController::class, 'uploadfile'])->middleware('auth');
Route::get('/listmatkul', [KelasController::class, 'matkul'])->middleware('auth');
