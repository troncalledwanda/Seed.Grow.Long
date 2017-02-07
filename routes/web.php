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

Route::resource('state', 'StateController');

Route::get('/', function () { return view('index')->with('content', App\State::with('images')->get());});

Route::get('groot', function () { return view('groot');});

Route::get('todo', function () {return view('todos');});