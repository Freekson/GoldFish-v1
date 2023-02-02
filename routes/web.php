<?php

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

Route::get('/', 'App\Http\Controllers\MainController@index');
Route::get('/cart', 'App\Http\Controllers\MainController@cart');
Route::get('/ordering', 'App\Http\Controllers\MainController@ordering');
Route::get('/personal-account', 'App\Http\Controllers\MainController@personal_account');
Route::get('/user-orders', 'App\Http\Controllers\MainController@user_orders');
Route::get('/user-settings', 'App\Http\Controllers\MainController@user_settings');
//catalog and category
Route::get('/catalog', 'App\Http\Controllers\MainController@catalog');
Route::get('/{category}', 'App\Http\Controllers\MainController@category');

