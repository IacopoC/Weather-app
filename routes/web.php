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

Route::get('/', 'UserController@index');

Route::get('/search', 'GeneralController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home', 'HomeController@update');

Route::get('/history', 'HistoryController@index')->name('history');

Route::post('/history', 'HistoryController@destroy');
