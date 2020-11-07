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

Auth::routes();

Route::get('/', 'UserController@show');

Route::get('/search', 'GeneralController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home', 'HomeController@update');

Route::get('/history', 'HomeController@show')->name('history');

Route::post('/history', 'HomeController@destroy');
