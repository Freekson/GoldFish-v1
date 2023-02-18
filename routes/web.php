<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
Route::get('/personal-account', 'App\Http\Controllers\MainController@personal_account')->name('profile');
Route::get('/user-orders', 'App\Http\Controllers\MainController@user_orders')->name('user-orders'); 
Route::get('/user-settings', 'App\Http\Controllers\MainController@user_settings')->name('user-settings'); 
//cart and ordering
Route::group([
    'prefix' => 'cart'
], function() {

    Route::post('/add/{id}', 'App\Http\Controllers\CartController@cartAdd')->name('cart-add');

    Route::group([
        'middleware' => 'basket_not_empty',
        'prefix' => 'cart'
    ], function() {
        Route::get('/', 'App\Http\Controllers\CartController@cart')->name('cart');
        Route::get('/ordering', 'App\Http\Controllers\CartController@ordering')->name('ordering');
        Route::post('/remove/{id}', 'App\Http\Controllers\CartController@cartRemove')->name('cart-remove');
        Route::post('/delete/{id}', 'App\Http\Controllers\CartController@cartDelete')->name('cart-delete');
        Route::post('/ordering', 'App\Http\Controllers\CartController@cartConfirm')->name('cart-confirm');
    });
});


//catalog and category
Route::get('/catalog', 'App\Http\Controllers\MainController@catalog')->name('catalog');
Route::get('/catalog/{category}', 'App\Http\Controllers\MainController@category')->name('category');
Route::get('/category/product', 'App\Http\Controllers\MainController@product')->name('product');
Route::get('/all-products', 'App\Http\Controllers\MainController@all_products')->name('all-products');

//auth
Route::group(['middleware' => 'auth'
], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::group(['middleware' => 'is_admin'], function(){
        Route::get('/orders', [App\Http\Controllers\HomeController::class, 'orders'])->name('orders');
    });
});
Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);
