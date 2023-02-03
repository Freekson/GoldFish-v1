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

Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');
Route::get('/cart', 'App\Http\Controllers\MainController@cart')->name('cart');
Route::get('/ordering', 'App\Http\Controllers\MainController@ordering')->name('ordering');
Route::get('/personal-account', 'App\Http\Controllers\MainController@personal_account')->name('profile');
Route::get('/user-orders', 'App\Http\Controllers\MainController@user_orders')->name('user-orders'); 
Route::get('/user-settings', 'App\Http\Controllers\MainController@user_settings')->name('user-settings'); 
//catalog and category
Route::get('/catalog', 'App\Http\Controllers\MainController@catalog')->name('catalog');
Route::get('/catalog/{category}', 'App\Http\Controllers\MainController@category')->name('category');
Route::get('/category/product', 'App\Http\Controllers\MainController@product')->name('product');
Route::get('/all-products', 'App\Http\Controllers\MainController@all_products')->name('all-products');