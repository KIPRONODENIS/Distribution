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
Route::get('/msg',function(){
	$contact=\App\User::find(2);
return view('messenger',compact('contact'));
})->middleware('auth');

Route::get('/conversation/{id}','ContactController@conversation');

Route::post('chat/conversation/send','ContactController@send');
Route::get('/contacts','ContactController@get');
//chat page
Route::get('/chat/{user}','ChatController@show')->middleware('auth');



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
//view specified product 
Route::get('/product/{product}','ProductController@view')->name('product.show');
Route::get('/products','ProductController@index');
//route to create new product
Route::get('/products/new','ProductController@create')->name('product.create');
//post route to create product
Route::post('/product/store','ProductController@store')->name('product.store');
//Route to show edit view
Route::get('/product/{product}/edit','ProductController@edit')->name('product.edit');
Route::put('/product/{product}','ProductController@update')->name('product.update');
Route::get('/product/{product}/remove','ProductController@destroy')->name('product.delete');

Route::get('/products/{product}','ProductController@show');
Route::get('order-success','OrderController@success');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Lest get into admin routes 
Route::get('/admin','AdminController@index')->name('admin.home');
Route::get('/admin/users','AdminController@users')->name('admin.users');
Route::get('/admin/products','AdminController@products')->name('admin.products');
Route::get('/admin/orders','AdminController@orders')->name('admin.orders');
