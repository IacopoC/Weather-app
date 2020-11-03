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

Route::get('/', 'GeneralController@searched');

Route::get('/search', 'GeneralController@search');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home', 'HomeController@updateUser');

Route::get('/history', 'HomeController@history')->name('history');

Route::post('/history', 'HomeController@deleteHistory');
