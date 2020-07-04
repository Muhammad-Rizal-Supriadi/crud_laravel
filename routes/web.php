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

Route::get('/data-tables', function(){
	return view('data_tables');
});

// pertanyaan
Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/create','PertanyaanController@create');
Route::post('/pertanyaan','PertanyaanController@store');
Route::get('/pertanyaan/{id}','PertanyaanController@detail');
Route::get('/pertanyaand/{id}','PertanyaanController@delete');
Route::get('/pertanyaan/{id}/edit','PertanyaanController@form_edit');
Route::post('/pertanyaan/{id}/edit','PertanyaanController@edit');

// Jawaban
Route::post('/jawaban/{pertanyaan_id}','JawabanController@store');
Route::get('/jawaban/{pertanyaan_id}','JawabanController@index');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
