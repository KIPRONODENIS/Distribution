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
//route to create new product
Route::get('/products/new','ProductController@create')->name('product.create');
//post route to create product
Route::post('/product/store','ProductController@store')->name('product.store');
//chat page
Route::get('/chat/{user}','ChatController@show')->middleware('auth');

Route::get('/products/{product}','ProductController@show');
Route::get('order-success','OrderController@success');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

