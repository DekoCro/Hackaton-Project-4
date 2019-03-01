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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/poll/index', 'PoleController@index')->name('poll.display');

Route::get('/poll/create', 'PoleController@create');
Route::post('/poll/create', 'PoleController@store')->name('poll.store')->middleware();

Route::get('/poll/option/{poll_id}', 'OptionController@create')->name('option.form');
Route::post('/poll/option', 'OptionController@store')->name('option.store')->middleware();

Route::get('/poll/{id}/edit', 'PoleController@edit')->name('poll.edit');
Route::post('/poll/{id}/edit', 'PoleController@update')->name('poll.edit')->middleware();

Route::get('/poll/{id}/detail', 'PoleController@detail')->name('poll.detail');


