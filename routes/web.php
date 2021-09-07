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

Route::get('/', 'HelloController@index');

Route::resource('/products', 'ProductController');

Route::resource('news', 'NewsController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('carts', 'CartController@index')->name('carts.index');
Route::post('carts', 'CartController@store')->name('carts.store');
Route::put('carts', 'CartController@update')->name('carts.update');
Route::delete('carts', 'CartController@destroy')->name('carts.destroy');

Route::get('users/maypage', 'UserController@mypage')->name('users.mypage');

Route::get('users/register_card', 'UserController@register_card')->name('users.register_card');



// Route::get('/cart', 'CartController@ses_get');
// Route::post('/cart', 'CartController@ses_put')->name('addCart');
