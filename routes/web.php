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
Route::get('/', 'IndexController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@index');
Route::post('/editprofile', 'ProfileController@edit');
Route::get('/create-new-ad', 'AdsController@index');
Route::post('/createad', 'AdsController@create');
Route::post('/editad', 'AdsController@edit');
Route::post('/deletead', 'AdsController@destroy');
Route::get('/myads', 'AdsController@show');

Auth::routes();
Auth::routes(['verify' => true]);