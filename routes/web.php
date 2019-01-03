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


Route::group(['prefix' => 'admin','middleware' => 'Admin'],function(){
  Route::get('/', 'AdminController@index')->name('home');
  Route::get('/kelola-soal', 'AdminController@soal')->name('home');
  Route::get('/kelola-soal/status/{id}','AdminController@status');
  Route::get('/kelola-soal/tambah-soal','AdminController@tambahsoal');
  Route::get('/kelola-soal/preview/{id}','AdminController@preview');
  Route::get('/kelola-soal/hapus/{id}','AdminController@hapus_soal');



});

Route::group(['prefix' => 'siswa','middleware' => 'Siswa'],function(){
  Route::get('/', 'SiswaController@index');
  Route::get('/soal', 'SiswaController@soal');

  Route::post('/jawaban', 'SiswaController@jawaban');

});


Route::get('/', function () {

  return view('auth.login');
});

Auth::routes();
