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

Route::get('/events', 'EventController@index')->name('events.index');
Route::post('/events', 'EventController@store')->name('events.store');
Route::get('/events/{id}/edit', 'EventController@edit')->name('events.edit');
Route::put('/events/{id}', 'EventController@update')->name('events.update');
Route::delete('/events/{id}', 'EventController@destroy')->name('events.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
