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

Route::get('/insert', 'apicontroller@insertapi');
Route::get('/update', 'apicontroller@updateapi');
Route::get('/delete', 'apicontroller@deleteapi');
Route::get('/view', 'apicontroller@viewapi');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
