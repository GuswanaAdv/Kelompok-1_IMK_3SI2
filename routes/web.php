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
    return view('beranda');
});

Route::get('/data_desa', function () {
    return view('datadesa');
});

Route::get('/data_desa_umur', function () {
    return view('datadesa_umur');
});

Route::get('/data_desa_pendidikan_KK', function () {
    return view('datadesa_pendkk');
});

Route::get('/data_desa_pekerjaan', function () {
    return view('datadesa_kerja');
});

Route::get('/data_desa_status_kawin', function () {
    return view('datadesa_kawin');
});