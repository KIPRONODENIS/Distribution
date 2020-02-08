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

Route::get('/','WelcomeController@index');
Route::get('contact', function () {
    return view('contact');
});

//Route to order from particular distributor

Route::get('/cart/{product}','OrderController@show');
Route::post('/order','OrderController@store')->name('order');
//Route to view Products
Route::get('/products/{product}','ProductController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

