<?php

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

Route::model('order', 'App\Order');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/orders', 'OrderController@index')->name('order.index');
    Route::get('/orders/{order}', 'OrderController@show')->name('order.show');
    Route::get('/admin', function () {
        $orders = App\Order::all();

        return $orders->map(function ($order) {
            return [$order->fake_id, $order->id];
        });
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
