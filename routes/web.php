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
    return view('tampilanawal.index');
});

Route::get('/barang', function () {
    return view('barang.barang');
});


Route::get('/user', 'UserController@index');

Route::get('/user/create', 'UserController@create');
Route::post('/user', 'UserController@store');


Route::get('/user/{id}', 'UserController@show');

Route::get('/user/{id}/edit', 'UserController@edit');

Route::put('/user/{id}', 'UserController@update');

Route::delete('/user/{id}', 'UserController@destroy');




