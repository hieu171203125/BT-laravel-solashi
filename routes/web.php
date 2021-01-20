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
	return view('weblayout');
});
Route::get('/', function () {
	return view('welcome');
});

//Url Trang web
Route::group(['prefix'=>'','namespace'=>'Web'],function(){
	Route::get('/','HomeController@index')->name('web.index');
	Route::get('/product/{product_id}','HomeController@show')->name('web.show');
	Route::get('/category/{category_id}','UserController@showcategory')->name('web.category');
	Route::get('/signin','UserController@index')->name('web.signin');
	Route::get('/signup','UserController@create')->name('web.signup');
	Route::post('/store','UserController@store')->name('web.store');
	Route::post('/login','UserController@login')->name('web.login');
	Route::get('/logout','UserController@logout')->name('web.logout');
	Route::get('/cart','CartController@index')->name('web.cart');
	Route::get('/cart-home/{product_id}','CartController@addCarthome')->name('web.cart.addhome');
	Route::post('/cart-details/{product_id}','CartController@cartdetails')->name('web.cart.adddetails');
	Route::post('/update-cart','CartController@updateCart')->name('web.cart.update');
	Route::get('/delete-cart/{product_id}','CartController@deleteCart')->name('web.cart.delete');
	Route::get('/search','HomeController@search')->name('web.search');
});


//Url trang quản trị viên
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
	Route::get('/','AdminController@index')->name('admin.index');
	Route::group(['prefix'=>'product'],function(){
		Route::get('all','ProductController@index')->name('admin.product.index');
		Route::get('add','ProductController@create')->name('admin.product.create');
		Route::post('store','ProductController@store')->name('admin.product.store');
	});
});
