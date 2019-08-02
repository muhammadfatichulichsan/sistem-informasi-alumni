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
// root
Route::view('/','welcome');
Route::get('admin','AdminController@index')->name('admin')->middleware('admin');

// login register
Auth::routes();

// edit profil
Route::get('/profil', 'UserController@profil')->name('profil')->middleware('auth');
Route::get('/user-edit', 'UserController@edit')->name('user.edit')->middleware('auth');
Route::post('/user-edit', 'UserController@update')->name('user.update')->middleware('auth');

// crud jurusan
Route::resource('jurusan','JurusanController');

// crud  pekerjaan
Route::resource('pekerjaan','PekerjaanController');

// crud pengumuman
Route::resource('pengumuman','PengumumanController');

// crud lowongan
Route::get('/my-post', 'PostController@my_post')->name('post.mypost')->middleware('auth');
Route::resource('post','PostController');

// cetak pdf
Route::get('download-pdf','HomeController@downloadPDF')->middleware('admin');
Route::get('cetak-laporan','HomeController@cetak')->name('cetak')->middleware('admin');

// pencarian
Route::get('/data-siswa', 'UserController@data')->name('data')->middleware('auth');
Route::get('/hasil-pencarian/', 'UserController@search')->name('pencarian')->middleware('auth');
Route::get('/pencarian-data/', 'UserController@cari')->name('cari')->middleware('auth');

// import
Route::get('tambah-data-alumni', 'UserController@importexcel')->name('import.excel')->middleware('admin');
Route::post('import-excel', 'UserController@import')->name('import')->middleware('admin');