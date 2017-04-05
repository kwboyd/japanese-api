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

// Vocabs collection routes
Route::get('/vocabs', 'VocabController@index');
Route::post('/vocabs', 'VocabController@create');

// Vocabs singular routes
Route::get('/vocabs/{id}', 'VocabController@show');
Route::put('/vocabs/{id}', 'VocabController@update');
Route::delete('/vocabs/{id}', 'VocabController@destroy');

// Particles collection routes
Route::get('/particles', 'ParticleController@index');
Route::post('/particles', 'ParticleController@create');

// Particles singular routes
Route::get('/particles/{id}', 'ParticleController@show');
Route::put('/particles/{id}', 'ParticleController@update');
Route::delete('/particles/{id}', 'ParticleController@destroy');

Route::get('/', function () {
  return view('welcome');
});
