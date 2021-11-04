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

Route::resource('products', 'ProductController');
// Route::resource('/products', 'ProductController');

Route::resource('news', 'NewsController');


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('carts', 'CartController@index')->name('carts.index');
Route::post('carts', 'CartController@store')->name('carts.store');
Route::put('/carts/update', 'CartController@update')->name('carts.update');
Route::delete('carts', 'CartController@destroy')->name('carts.destroy');
//購入完了画面へ
Route::get('/carts/thanks', 'CartController@purchase')->name('carts.purchase');

//マイページ
Route::get('users/mypage', 'UserController@mypage')->name('mypage');
Route::get('users/mypage/edit', 'UserController@edit')->name('mypage.edit');
Route::get('users/mypage/address/edit', 'UserController@edit_address')->name('mypage.edit_address');//お届け先の変更
Route::put('users/mypage', 'UserController@update')->name('mypage.update');
Route::get('users/register_card', 'UserController@register_card')->name('mypage.register_card');
Route::post('users/mypage/token', 'UserController@token')->name('mypage.token');
Route::get('users/mypage/cart_history', 'UserController@cart_history_index')->name('mypage.cart_history');
Route::get('users/mypage/cart_history/{num}', 'UserController@cart_history_show')->name('mypage.cart_history_show');
Route::delete('users/mypage/delete', 'UserController@destroy')->name('mypage.destroy');

// お問い合わせ完了画面へ
Route::post('/contacts/thanks', 'ContactController@send')->name('contact.send');
Route::get('/contacts/thanks', 'ContactController@index')->name('contact.thanks');

//管理画面
Route::get('/dashboard', 'DashboardController@index')->middleware('auth:admins');

Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
    Route::get('login', 'Dashboard\Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Dashboard\Auth\LoginController@login')->name('login');
    Route::get('orders', 'Dashboard\OrderController@index')->middleware('auth:admins');
    Route::resource('users', 'Dashboard\UserController')->middleware('auth:admins');
});

Route::get('guide', 'GuideController@index');
Route::get('/tokusyouhou','GuideController@tokusyouhou');
Route::get('/kojinjouhou','GuideController@kojinjouhou');
    