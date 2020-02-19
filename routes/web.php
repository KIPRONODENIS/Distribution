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
//route to update and order
Route::get('/order/{order}/update','OrderController@update')->name('order.update');
//Route to view Products
Route::get('/products','ProductController@index');

//chat page
Route::get('/chat/{user}','ChatController@show')->middleware('auth');

Route::get('/products/{product}','ProductController@show');
Route::get('order-success','OrderController@success');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

