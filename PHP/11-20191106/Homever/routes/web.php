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
Route::get('/create', 'UserController@create');
Route::post('/store', 'UserController@store');
Route::get('/', 'UserController@index')->name('admin.home');
Route::get('/{user}', 'UserController@show');
Route::delete('/{user}','UserController@destroy');
Route::get('/{user}/edit', 'UserController@edit');
Route::put('/{user}', 'UserController@update')->name('admin.update');
