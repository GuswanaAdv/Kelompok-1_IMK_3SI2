<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('template');
});

Route::get('/index', function () {
    return view('beranda');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/cardBerita', function () {
    return view('cardBerita');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/gabungan', function () {
    // $data = [
    //     "judul" => "Membangkitkan Semangat di Tengah Pandemi",
    //     "date" => "9 Juni 2024",
    //     "body" => "Di masa pandemi ini, menjaga semangat dan motivasi menjadi sangat penting. Banyak kisah inspiratif yang bisa kita ambil pelajaran, salah satunya adalah perjuangan seorang ibu tunggal yang berhasil membuka usaha kecil-kecilan di tengah segala keterbatasan",
    //     "category" => "Motivasi"
    // ];
    return view('gabungan', [
        "judul" => "Membangkitkan Semangat di Tengah Pandemi",
        "date" => "9 Juni 2024",
        "body" => "Di masa pandemi ini, menjaga semangat dan motivasi menjadi sangat penting. Banyak kisah inspiratif yang bisa kita ambil pelajaran, salah satunya adalah perjuangan seorang ibu tunggal yang berhasil membuka usaha kecil-kecilan di tengah segala keterbatasan",
        "category" => "Motivasi"
    ]);
});