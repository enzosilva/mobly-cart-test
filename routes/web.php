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

Route::get('/', 'HomeController@index');

Route::get('/user/create', 'UserController@create');

Route::post('/user/store', 'UserController@store');

Route::get('/catalog/show', 'CatalogController@show');

Route::get('/catalog/product/{id}/detail', 'ProductController@show');

Route::get('/checkout', 'CheckoutController@index');

Route::put("/checkout/update", "CheckoutController@update");

Route::get('/checkout/item', 'CheckoutItemController@index');

Route::post('/checkout/item/store', 'CheckoutItemController@store');

Route::post('/checkout/item/update', 'CheckoutItemController@update');

Route::delete('/checkout/item/destroy', 'CheckoutItemController@destroy');

Route::get('/login', 'LoginController@index');

Route::post('/login/store', 'LoginController@store');

Route::get('/login/destroy', 'LoginController@destroy');