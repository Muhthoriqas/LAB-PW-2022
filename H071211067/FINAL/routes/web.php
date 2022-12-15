<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//   ========= FrontEnd Start Here =========   //
Route::get('/','App\Http\Controllers\frontendController@index')->name('home_index');
Route::get('/category/computer/show/{category_id}','App\Http\Controllers\frontendController@show')->name('category_computer'); 
//   ========= FrontEnd End Here =========   //




//   ========= BackEnd Start Here =========   //
//========= Category Start Here =========//
Route::get('/category/add', 'App\Http\Controllers\categoryController@index')->name('show_cate_table');
Route::post('/category/save', 'App\Http\Controllers\categoryController@save')->name('cate_save');
Route::get('/category/manage', 'App\Http\Controllers\categoryController@manage')->name('manage_cate');
Route::get('/category/active/{category_id}', 'App\Http\Controllers\categoryController@active')->name('category_active');
Route::get('/category/inactive/{category_id}', 'App\Http\Controllers\categoryController@inactive')->name('inactive_cate');
Route::get('/category/delete/{category_id}', 'App\Http\Controllers\categoryController@delete')->name('cate_delete');
Route::post('/category/update', 'App\Http\Controllers\categoryController@update')->name('cate_update');
//========= Category End Here =========//

//========= Coupon Start Here =========//
Route::get('/coupon/add', 'App\Http\Controllers\couponController@index')->name('show_coupon_table');
Route::post('/coupon/save', 'App\Http\Controllers\couponController@save')->name('coupon_save');
Route::get('/coupon/manage', 'App\Http\Controllers\couponController@manage')->name('manage_coupon');
Route::get('/coupon/active/{coupon_id}', 'App\Http\Controllers\couponController@active')->name('coupon_active');
Route::get('/coupon/inactive/{coupon_id}', 'App\Http\Controllers\couponController@inactive')->name('inactive_coupon');
Route::get('/coupon/delete/{coupon_id}', 'App\Http\Controllers\couponController@delete')->name('coupon_delete');
Route::post('/coupon/update', 'App\Http\Controllers\couponController@update')->name('coupon_update');
//========= Coupon End Here =========//

//========= Computer Start Here =========//
Route::get('/computer/add', 'App\Http\Controllers\computerController@index')->name('show_computer_table');
Route::post('/computer/save', 'App\Http\Controllers\computerController@save')->name('computer_save');
Route::get('/computer/manage', 'App\Http\Controllers\computerController@manage')->name('manage_computer');
Route::get('/computer/active/{computer_id}', 'App\Http\Controllers\computerController@active')->name('computer_active');
Route::get('/computer/inactive/{computer_id}', 'App\Http\Controllers\computerController@inactive')->name('inactive_computer');
Route::get('/computer/delete/{computer_id}', 'App\Http\Controllers\computerController@delete')->name('computer_delete');
Route::post('/computer/update', 'App\Http\Controllers\computerController@update')->name('computer_update');
//========= Computer End Here =========//

//========= User Start Here =========//
Route::get('/user/manage', 'App\Http\Controllers\userController@manage')->name('manage_user');
Route::get('/user/delete/{id}', 'App\Http\Controllers\userController@delete')->name('user_delete');
//========= User End Here =========//

//========= Question Start Here =========//
Route::post('/question/save', 'App\Http\Controllers\questionController@save')->name('question_save');
Route::get('/question/manage', 'App\Http\Controllers\questionController@manage')->name('manage_question');
//========= Question End Here =========//

//   ========= BackEnd End Here =========   //



