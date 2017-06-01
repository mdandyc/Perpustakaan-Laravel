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

Route::resource('siswa', 'SiswaController');
Route::post('siswa/search','SiswaController@search');
Route::resource('buku', 'BukuController');
Route::resource('peminjaman', 'PeminjamanController');
Route::post('peminjaman/search', 'PeminjamanController@search');

Auth::routes();

Route::get('/home', 'PeminjamanController@index');

Route::get('/awww', function () {
    return view('home');
});