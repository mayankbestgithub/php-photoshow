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

Route::get('/','AlbumsController@index');
Route::get('/create','AlbumsController@create');
Route::post('/albums/save','AlbumsController@store');
Route::get('/show/{id}','AlbumsController@show');


Route::get('/photo/create/{id}','PhotosController@create');
Route::post('/photo/save','PhotosController@store');