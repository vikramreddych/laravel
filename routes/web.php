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
    return view('index');
});

Route::get('/', 'PostController@index');
Route::get('/post', 'PostController@show');
Route::get('/post/{id}', 'PostController@showdetail');
Route::POST('/post', 'PostController@create');
