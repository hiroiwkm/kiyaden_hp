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

use App\Http\Controllers\Controller;

Route::get('/', 'HelloController@index')->name('welcome');


Route::resource('/products', 'ProductController');

Route::resource('news', 'NewsController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('carts', 'CartController@index')->name('carts.index');
Route::post('carts', 'CartController@store')->name('carts.store');
Route::put('/carts/update', 'CartController@update')->name('carts.update');
Route::delete('carts', 'CartController@destroy')->name('carts.destroy');
//購入完了画面へ
Route::get('/carts/thanks', 'CartController@purchase')->name('carts.purchase');

Route::get('users/mypage', 'UserController@mypage')->name('mypage');
Route::get('users/mypage/edit', 'UserController@edit')->name('mypage.edit');
Route::get('users/mypage/address/edit', 'UserController@edit_address')->name('mypage.edit_address');
Route::put('users/mypage', 'UserController@update')->name('mypage.update');
Route::get('users/register_card', 'UserController@register_card')->name('mypage.register_card');
Route::post('users/mypage/token', 'UserController@token')->name('mypage.token');

//お問い合わせ確認画面へ
Route::post('/contacts/confirm', 'ContactController@confirm')->name('contact.confirm');
// お問い合わせ完了画面へ
Route::post('/contacts/thanks',  'ContactController@send')->name('contact.send');
Route::get('/contacts/thanks', 'ContactController@index')->name('contact.thanks');


