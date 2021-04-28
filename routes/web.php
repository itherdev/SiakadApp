<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard');

/*------------------ Mahasiswa--------------------------*/
// Data Mahasiswa
Route::get('data-mahasiswa', 'DatamahasiswaController@index')->name('data-mahasiswa');

// Kalender
Route::get('kalender', 'KalenderController@index')->name('kalender');

// Data Kurikulum
Route::get('data-kurikulum', 'DatakurikulumController@index')->name('data-kurikulum');

// beasiswa
Route::get('beasiswa', 'BeasiswaController@index')->name('beasiswa');

// sertifikasi
Route::get('sertifikasi', 'SertifikasiController@index')->name('sertifikasi');

// jadwalkuliah
Route::get('jadwal-kuliah', 'JadwalkuliahController@index')->name('jadwal-kuliah');

// krs
Route::get('krs', 'KrsController@index')->name('krs');

// khs
Route::get('khs', 'KhsController@index')->name('khs');

// nilaimahasiswa
Route::get('nilai-mahasiswa', 'NilaimahasiswaController@index')->name('nilai-mahasiswa');

// transkipnilai
Route::get('transkip-nilai', 'TranskipnilaiController@index')->name('transkip-nilai');

// jadwalujian
Route::get('jadwal-ujian', 'JadwalujianController@index')->name('jadwal-ujian');
