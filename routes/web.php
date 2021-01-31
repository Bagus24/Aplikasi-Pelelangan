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

Route::get('welperusahaan', function () {
    return view('perusahaan.welcome');
});

Route::resource('home', 'HomeController');
Route::resource('admin', 'AdminController');
Route::resource('proyek', 'ProyekController');
Route::resource('perusahaan', 'PerusahaanController');
Route::resource('penawaran', 'PenawaranController');
Route::resource('adminpenawaran', 'PenawaranAdminController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
