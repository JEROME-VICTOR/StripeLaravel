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
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers'], function() {
    Route::get('products', 'ProductController@index')->name('products');
    Route::get('products/{product}/addToCart', 'ProductController@addToCart')->name('products.addToCart');
    Route::get('cart', 'CartController@index')->name('cart');
    Route::get('cart/{product}/remove', 'CartController@removeProduct')->name('cart.removeProduct');
    Route::post('checkout', 'CheckoutController@checkout')->name('checkout');
    Route::get('success', 'CheckoutController@success')->name('success');
    Route::get('cancel', 'CheckoutController@cancel')->name('cancel');
});