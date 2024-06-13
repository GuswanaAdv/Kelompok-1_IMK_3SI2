<?php

use App\Http\Controllers\BeritaController;
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
    return view('index');
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

Route::get('/gabungan', [BeritaController::class, 'index'])->name('berita.index');