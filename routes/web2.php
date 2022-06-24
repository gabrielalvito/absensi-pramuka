<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\Siswa\SiswaDatadiriController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

Auth::routes(['verify' => true]);

Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', "DashboardController@index");
    });

//User = User
Route::get('/user', "DashboarduserController@index")->middleware('user');


//Admin = Data DiriSiswa
Route::get('/siswa', "SiswaDatadiriController@index");
Route::get('/siswa/create', 'SiswaDatadiriController@create');
Route::post('/siswa/store', "SiswaDatadiriController@store");
Route::get('/siswa/{id}/show', "SiswaDatadiriController@show");
Route::get('/siswa/{id}/edit', "SiswaDatadiriController@edit");
Route::patch('/siswa/{id}/update', "SiswaDatadiriController@update");
Route::delete('/siswa/{id}', "SiswaDatadiriController@destroy");

//User = Data DiriSiswa
// Route::get('/siswa', "SiswaDatadiriController@indexuser");


//Admin = Data Pembina
Route::get('/pembina', "PembinaController@index");
Route::get('/pembina/create', "PembinaController@create");
Route::post('/pembina/store', "PembinaController@store");
Route::get('/pembina/{id}/show', "PembinaController@show");
Route::get('/pembina/{id}/edit', "PembinaController@edit");
Route::patch('/pembina/{id}/update', "PembinaController@update");
Route::delete('/pembina/{id}', "PembinaController@destroy");



Route::get('/regu', "ReguController@index");
Route::get('/regu/create', "ReguController@create");
Route::post('/regu/store', "ReguController@store");
Route::get('/regu/{id}/show', "ReguController@show");
Route::get('/regu/{id}/edit', "ReguController@edit");
Route::patch('/regu/{id}/update', "ReguController@update");
Route::delete('/regu/{id}', "ReguController@destroy");

//User = Data Pembina
// Route::get('/pembina', "PembinaController@indexuser");

//Admin = Data Admin
Route::get('/user01', "User01Controller@index");
Route::get('/user01/create', "User01Controller@create");
// Route::get('/pembina/create', "PembinaController@create");
// Route::post('/pembina/store', "PembinaController@store");
// Route::get('/pembina/{id}/show', "PembinaController@show");
// Route::get('/pembina/{id}/edit', "PembinaController@edit");
// Route::patch('/pembina/{id}/update', "PembinaController@update");
// Route::delete('/pembina/{id}', "PembinaController@destroy");


//Admin = Data Presensi
// Route::get('/presensi', "PresensiController@index");
// Route::get('/pembina/create', "PembinaController@create");
// Route::post('/pembina/store', "PembinaController@store");
// Route::get('/pembina/{id}/show', "PembinaController@show");
// Route::get('/pembina/{id}/edit', "PembinaController@edit");
// Route::patch('/pembina/{id}/update', "PembinaController@update");
// Route::delete('/pembina/{id}', "PembinaController@destroy");

//User = Data Presensi
Route::get('/presensi', "PresensiController@indexuser");

//Admin = Data Rekap
Route::get('/rekap', "RekapController@index");
// Route::get('/pembina/create', "PembinaController@create");
// Route::post('/pembina/store', "PembinaController@store");
// Route::get('/pembina/{id}/show', "PembinaController@show");
// Route::get('/pembina/{id}/edit', "PembinaController@edit");
// Route::patch('/pembina/{id}/update', "PembinaController@update");
// Route::delete('/pembina/{id}', "PembinaController@destroy");

//User = Data Rekap
// Route::get('/rekap', "RekapController@indexuser");

//DomPDF siswa
Route::get('/siswa/{id}/cetak_pdf', 'SiswaDatadiriController@cetak_pdf');
Route::get('/siswa/{id}/print_pdf', 'SiswaDatadiriController@print_pdf');
Route::get('/siswa/export_excel', 'SiswaDatadiriController@export_excel');
Route::post('/siswa/import_excel', 'SiswaDatadiriController@import_excel');

//DomPDF pembina
Route::get('/pembina/{id}/cetak_pdf', 'PembinaController@cetak_pdf');
Route::get('/pembina/{id}/print_pdf', 'PembinaController@print_pdf');
Route::get('/pembina/export_excel', 'PembinaController@export_excel');
Route::post('/pembina/import_excel', 'pembinaController@import_excel');

//DomPDF
// Route::get('/siswa/{id}/cetak_pdf', 'SiswaDatadiriController@cetak_pdf');


//Siswa = Data Ortu


// Route::get('/siswa/createortu', [App\Http\Controllers\Admin\SiswaController::class, 'createortu']);
// Route::get('/siswa/createjuara', [App\Http\Controllers\Admin\SiswaController::class, 'createjuara']);
// Route::get('/siswa/createsku', [App\Http\Controllers\Admin\SiswaController::class, 'createsku']);
// Route::get('/siswa/createskk', [App\Http\Controllers\Admin\SiswaController::class, 'createskk']);
// Route::get('/siswa/creategaruda', [App\Http\Controllers\Admin\SiswaController::class, 'creategaruda']);
// Route::get('/siswa/createkegiatan', [App\Http\Controllers\Admin\SiswaController::class, 'createkegiatan']);
