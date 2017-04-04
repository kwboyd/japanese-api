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


use Illuminate\Http\Request;


// Kanjis collection routes
Route::get('/kanjis', 'KanjiController@index');
Route::post('/kanjis', 'KanjiController@create');

// Kanjis singular routes
Route::get('/kanjis/{id}', 'KanjiController@show');
Route::put('/kanjis/{id}', 'KanjiController@update');
Route::delete('/kanjis/{id}', 'KanjiController@destroy');

Route::get('/', function () {
  return view('welcome');
});
