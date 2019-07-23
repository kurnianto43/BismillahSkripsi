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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tambah/wajib-pajak', 'WajibpajakController@create')->name('wajibpajak.create');
Route::post('/tambah/wajib-pajak', 'WajibpajakController@store')->name('wajibpajak.store');
Route::get('/data/wajib-pajak','WajibpajakController@index')->name('wajibpajak.index');
Route::get('/edit/{wajibpajak}/wajib-pajak','WajibpajakController@edit')->name('wajibpajak.edit');
Route::patch('/edit/{wajibpajak}/wajib-pajak','WajibpajakController@update')->name('wajibpajak.update');
Route::delete('/hapus/{wajibpajak}/wajib-pajak','WajibpajakController@destroy')->name('wajibpajak.destroy');
Route::get('/wajibpajak-pdf', 'WajibPajakController@pdf')->name('wajibpajak.pdf');

Route::get('/tambah/pendaftaran', 'PendaftaranController@create')->name('pendaftaran.create');
Route::post('/tambah/pendaftaran', 'PendaftaranController@store')->name('pendaftaran.store');
Route::get('/data/pendaftaran', 'PendaftaranController@index')->name('pendaftaran.index');
Route::get('/edit/{pendaftaran}/pendaftaran','PendaftaranController@edit')->name('pendaftaran.edit');
Route::patch('/edit/{pendaftaran}/pendaftaran','PendaftaranController@update')->name('pendaftaran.update');
Route::delete('/hapus/{pendaftaran}/pendaftaran','PendaftaranController@destroy')->name('pendaftaran.destroy');
Route::get('/pendaftaran-pdf/{pendaftaran}', 'PendaftaranController@pdf')->name('pendaftaran.pdf');

Route::get('/tambah/jenisreklame', 'JenisReklameController@create')->name('jenisreklame.create');
Route::post('/tambah/jenisreklame', 'JenisReklameController@store')->name('jenisreklame.store');
Route::get('/data/jenisreklame', 'JenisReklameController@index')->name('jenisreklame.index');
Route::get('/edit/{jenisreklame}/jenisreklame','JenisReklameController@edit')->name('jenisreklame.edit');
Route::patch('/edit/{jenisreklame}/jenisreklame','JenisReklameController@update')->name('jenisreklame.update');
Route::delete('/hapus/{jenisreklame}/jenisreklame','JenisReklameController@destroy')->name('jenisreklame.destroy');
Route::get('/jenisreklame-pdf/{jenisreklame}', 'JenisReklameController@pdf')->name('jenisreklame.pdf');



Route::get('/tambah/perhitungankhusus', 'PerhitunganKhususController@create')->name('perhitungankhusus.create');
Route::post('/tambah/perhitungankhusus', 'PerhitunganKhususController@store')->name('perhitungankhusus.store');
Route::get('/data/perhitungankhusus', 'PerhitunganKhususController@index')->name('perhitungankhusus.index');
Route::get('/edit/{perhitungankhusus}/perhitungan','PerhitunganKhususController@edit')->name('perhitungankhusus.edit');
Route::delete('/hapus/{perhitungankhusus}/perhitungan','PerhitunganKhususController@destroy')->name('perhitungankhusus.destroy');


Route::get('/tambah/perhitunganzona', 'PerhitunganZonaController@create')->name('perhitunganzona.create');
Route::post('/tambah/perhitunganzona', 'PerhitunganZonaController@store')->name('perhitunganzona.store');
Route::get('/data/perhitunganzona', 'PerhitunganZonaController@index')->name('perhitunganzona.index');
Route::get('/edit/{perhitunganzona}/perhitunganzona','PerhitunganZonaController@edit')->name('perhitunganzona.edit');
Route::delete('/hapus/{perhitunganzona}/perhitungan','PerhitunganZonaController@destroy')->name('perhitunganZona.destroy');
Route::get('/perhitunganzona-pdf/{perhitunganzona}', 'PerhitunganZonaController@pdfsatuan')->name('perhitunganzona.pdfsatuan');

Route::get('/cari', 'PendaftaranController@loadData');