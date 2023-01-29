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

Route::get('/', function () {
    return view('index');
});

Route::get('/cart.php', function () {
    return view('cart');
});


Route::get('/ordering.php', function () {
    return view('ordering');
});

Route::get('/personal-account.php', function () {
    return view('personal-account');
});

Route::get('/user-orders.php', function () {
    return view('user-orders');
});

Route::get('/user-settings.php', function () {
    return view('user-settings');
});

//?test
Route::get('hello', function () {
    $name = 'User';
    return view('hello_user', [
        'name' => $name
    ]);
});
