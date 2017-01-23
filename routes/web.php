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

Route::get('state', 'StateController@index');

Route::get('state/create', 'StateController@create');

Route::post('state/post', 'StateController@store');

Route::get('state/{id}', 'StateController@show');