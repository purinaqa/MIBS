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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/register', 'HomeController@regist');
Route::get('/login', 'HomeController@login');
Route::get('/detail', 'HomeController@detailbuku');
Route::get('/cart', 'HomeController@cart');
Route::get('/checkout', 'HomeController@checkout');
Route::get('/invoice', 'HomeController@invoice');

Route::get('/profile-pembeli', 'DPController@profile');

Route::get('/admin-book', 'DAController@book');
Route::get('/admin-pembelian', 'DAController@pembelian');
Route::get('/admin-pemesanan', 'DAController@pemesanan');
Route::get('/admin-penjualan', 'DAController@penjualan');
