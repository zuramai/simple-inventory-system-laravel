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

Route::prefix('gudang')->group(function() {
	Route::post('/','GudangController@add_gudang');
	Route::get('/', 'GudangController@index');
	Route::get('/edit/{id}', 'GudangController@edit');
	Route::post('/update','GudangController@update');
	Route::get('/delete/{id}', 'GudangController@delete');
});

Route::prefix('barang')->group(function() {
	Route::get('/', 'BarangController@index');
	Route::post('/', 'BarangController@add');
	Route::get('/add', 'BarangController@add');
	Route::get('/edit/{id}', 'BarangController@edit');
	Route::post('/update','BarangController@update');
	Route::get('/delete/{id}', 'BarangController@delete');
});

