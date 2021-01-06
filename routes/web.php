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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::get('/shop', 'App\Http\Controllers\ShopController@show')->middleware('auth');

Route::get('/register', 'App\Http\Controllers\RegisterController@see');
Route::get('/login', 'App\Http\Controllers\LoginController@see')->name('login');
Route::get('/forgot', 'App\Http\Controllers\ResetController@see');

Route::get('/admin', 'App\Http\Controllers\AdminController@see');

Route::post('/register','App\Http\Controllers\RegisterController@save');

Route::post('/login/checklogin', 'App\Http\Controllers\LoginController@checklogin');

Route::get('logout', 'App\Http\Controllers\LoginController@logout');

Route::get('/cart', 'App\Http\Controllers\CartController@show')->middleware('auth');;

Route::post('/admin','App\Http\Controllers\AdminController@add');

Route::get('/item/{item}', 'App\Http\Controllers\ShopController@item_page');

Route::get('/item/add/{item}', 'App\Http\Controllers\ShopController@add_to_cart')->middleware('auth');
Route::get('/cart/delete/{item_id}', 'App\Http\Controllers\CartController@delete')->middleware('auth');
Route::get('/cart/modify/{item_id}', 'App\Http\Controllers\CartController@modify')->middleware('auth');

Route::get('/cart/add/{letest}', 'App\Http\Controllers\CartController@add')->middleware('auth');

Route::post('/item/modify/value/{id_qty}', 'App\Http\Controllers\ShopController@modify');

Route::post('/forgot/reset', 'App\Http\Controllers\ResetController@reset');

