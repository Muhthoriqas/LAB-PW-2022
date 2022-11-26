<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

// Route::get('/mahasiswa', function (){
//     return view ('index', [
//         'data' => DB::table('mahasiswas')->paginate(10)
//     ]);
// });

Route::get('/',[MahasiswaController::class, 'index'])->name('mahasiswa');
Route::post('/',[MahasiswaController::class, 'store'])->name('mahasiswa');
Route::get('/edit/{id}',[MahasiswaController::class, 'edit'])->name('mahasiswa');
Route::post('/edit/{id}',[MahasiswaController::class, 'update'])->name('mahasiswa');
Route::get('/delete/{id}',[MahasiswaController::class, 'delete'])->name('mahasiswa');