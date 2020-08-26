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

Route::get('/','TeachersController@index');
Route::POST('/register','TeachersController@register');
Route::get('/login','TeachersController@login');
Route::get('/signup','TeachersController@signup');
Route::POST('/validate','TeachersController@validatelogin');
Route::get('/logout', 'TeachersController@logout');
Route::get('/panel', 'TeachersController@panel');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
