<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use Jcf\Geocode\Geocode;

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
})->name('beranda');

Route::get('/data_desa', function () {
    return view('datadesa');
})->name('datadesa');

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

// Route::get('/profil', function () {
//     return view('profil');
// })->name('profil');

Route::get('/profil/visi_misi', function () {
    return view('menu_profil.visi_misi');
})->name('visi_misi');

Route::get('/profil/profil_pemerintahan', function () {
    return view('menu_profil.profil_pemerintahan');
})->name('profil_pemerintahan');

Route::get('/profil/profil_kelembagaan', function () {
    return view('menu_profil.profil_kelembagaan');
})->name('profil_kelembagaan');

Route::get('/profil/dukcapil_online', function () {
    return view('menu_profil.dukcapil_online');
})->name('dukcapil_online');

Route::get('/profil/fasilitas_pendidikan', function () {
    return view('menu_profil.fasilitas_pendidikan');
})->name('fasilitas_pendidikan');

Route::get('/profil/fasilitas_kesehatan', function () {
    return view('menu_profil.fasilitas_kesehatan');
})->name('fasilitas_kesehatan');

Route::get('/profil/profil_umum', [MapController::class, 'index'])->name('profil');
