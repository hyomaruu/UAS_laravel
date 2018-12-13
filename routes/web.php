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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
	Route::get('/home/home', 'AdminController@home');
	Route::get('/gudang/data', 'GudangController@data_gudang')->name('data_gudang');
	Route::get('/gudang/process/add', 'GudangController@add_gudang');
	Route::post('/gudang/process/save', 'GudangController@save_gudang');
	Route::get('/gudang/process/edit/{id}', 'GudangController@edit_gudang');
	Route::post('/gudang/process/update/{id}', 'GudangController@update_gudang');
	Route::get('/gudang/process/delete/{id}', 'GudangController@delete_gudang');
	Route::get('/barang/data', 'BarangController@data_barang')->name('data_barang');
	Route::get('/barang/process/add', 'BarangController@add_barang');
	Route::post('/barang/process/save', 'BarangController@save_barang');
	Route::get('/barang/process/edit/{id}', 'BarangController@edit_barang');
	Route::post('/barang/process/update/{id}', 'BarangController@update_barang');
	Route::get('/barang/process/delete/{id}', 'BarangController@delete_barang');
});