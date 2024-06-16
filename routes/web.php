<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapController;
use Jcf\Geocode\Geocode;
use App\Http\Controllers\BlogPostController;

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

// Beranda
Route::get('/', function () {
    return view('beranda',[
        "judul_halaman"=>"Beranda",
        "menu_sidebar"=>""
    ]);
})->name('beranda');
//


// Berita
Route::get('/cardBerita', function () {
    return view('cardBerita');
});

// Route::get('/berita/{slug}', [BeritaController::class, 'beritaPage'])->name('beritapage');

Route::get('/category', function () {
    return view('category');
});

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

Route::post('/berita_cari', [BeritaController::class, 'search'])->name('berita.search');

Route::get('/berita_cari', [BeritaController::class, 'search2'])->name('berita.pagination');

Route::get('/berita/sort', [BeritaController::class, 'sort'])->name('berita.sort');

Route::get('/berita/{slug}', [BeritaController::class, 'beritaPage'])->name('beritapage');


// Data Desa
Route::get('/data_desa_umur', function () {
    return view('datadesa_umur',[
        "kategori"=>"umur",
        "judul_halaman"=>"Data Desa",
        "menu_sidebar"=>""
    ]);
})->name('datadesa');

Route::get('/data_desa_pendidikan_KK', function () {
    return view('datadesa_pendkk',[
        "kategori"=>"pendidikan",
        "judul_halaman"=>"Data Desa",
        "menu_sidebar"=>""
    ]);
})->name('datadesa.pendidikan');

Route::get('/data_desa_pekerjaan', function () {
    return view('datadesa_kerja',[
        "kategori"=>"pekerjaan",
        "judul_halaman"=>"Data Desa",
        "menu_sidebar"=>""
    ]);
})->name('datadesa.pekerjaan');

Route::get('/data_desa_status_kawin', function () {
    return view('datadesa_kawin',[
        "kategori"=>"status_kawin",
        "judul_halaman"=>"Data Desa",
        "menu_sidebar"=>""
    ]);
})->name('datadesa.status_kawin');
//


// Profil dan Fasilitas
Route::get('/profil/visi_misi', function () {
    return view('menu_profil.visi_misi',[
        "judul_halaman"=>"Profil dan Fasilitas",
        "menu_sidebar"=>"Visi Misi"
    ]);
})->name('visi_misi');

Route::get('/profil/profil_pemerintahan', function () {
    return view('menu_profil.profil_pemerintahan',[
        "judul_halaman"=>"Profil dan Fasilitas",
        "menu_sidebar"=>"Profil Pemerintahan"
    ]);
})->name('profil_pemerintahan');

Route::get('/profil/profil_kelembagaan', function () {
    return view('menu_profil.profil_kelembagaan',[
        "judul_halaman"=>"Profil dan Fasilitas",
        "menu_sidebar"=>"Profil Kelembagaan"
    ]);
})->name('profil_kelembagaan');

Route::get('/profil/dukcapil_online', function () {
    return view('menu_profil.dukcapil_online', [
        "judul_halaman"=>"Profil dan Fasilitas",
        "menu_sidebar"=>"Dukcapil Online"
    ]);
})->name('dukcapil_online');

Route::get('/profil/fasilitas_pendidikan', function () {
    return view('menu_profil.fasilitas_pendidikan',[
        "judul_halaman"=>"Profil dan Fasilitas",
        "menu_sidebar"=>"Fasilitas Pendidikan"
    ]);
})->name('fasilitas_pendidikan');

Route::get('/profil/fasilitas_kesehatan', function () {
    return view('menu_profil.fasilitas_kesehatan',[
        "judul_halaman"=>"Profil dan Fasilitas",
        "menu_sidebar"=>"Fasilitas Kesehatan"
    ]);
})->name('fasilitas_kesehatan');

Route::get('/profil/profil_umum', [MapController::class, 'index'])->name('profil');
//