<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index(): View
    {

        $berita = Berita::paginate(6)->withQueryString();

        return view ('gabungan',[
            'berita' => $berita,
            'kategori' => array(),
            'judul_halaman' => 'Berita'
        ]);
    }

    public function sort(Request $request)
    {
        $query = Berita::query();

        // Handle sort query
        if ($request->has('sort')) {
            if ($request->sort == 'populer') {
                $query->orderBy('views', 'desc');
            } elseif ($request->sort == 'terbaru') {
                $query->orderBy('published_datetime', 'desc');
            }
        } else {
            // Default sorting jika tidak ada query parameter sort
            $query->orderBy('published_datetime', 'desc');
        }

        $berita = $query->paginate(6);

        return view('gabungan', [
            'berita' => $berita,
            'kategori' => [],
            'judul_halaman' => 'Berita'
        ]);
    }

    public function search(Request $request)
{   
    $search = $request->input('cari_berita1');
    $berita = is_array($request->input('berita')) ? $request->input('berita') : array();
    $lembaga = is_array($request->input('lembaga')) ? $request->input('lembaga') : array();
    $produk = is_array($request->input('produk')) ? $request->input('produk') : array();
    $kategori = array_merge($berita, $lembaga, $produk);

    if (!empty($kategori)) {
        $berita = Berita::where('judul', 'like', "%$search%")
            ->whereIn('kategori', $kategori)
            ->paginate(6)
            ->withQueryString();
    } else {
        $berita = Berita::where('judul', 'like', "%$search%")
            ->paginate(6)
            ->withQueryString();
    }

    $message = $berita->isEmpty() ? 'berita yang anda cari tidak ditemukan' : '';

    return view('gabungan', [
        'berita' => $berita,
        'kategori' => $kategori,
        'search' => $search,
        'judul_halaman' => 'Berita',
        'message' => $message
    ]);
}

public function search2()
{   
    $search = request('cari_berita1');
    $berita = is_array(request('berita')) ? request('berita') : array();
    $lembaga = is_array(request('lembaga')) ? request('lembaga') : array();
    $produk = is_array(request('produk')) ? request('produk') : array();
    $kategori = array_merge($berita, $lembaga, $produk);

    if (!empty($kategori)) {
        $berita = Berita::where('judul', 'like', "%$search%")
            ->whereIn('kategori', $kategori)
            ->paginate(6)
            ->withQueryString();
    } else {
        $berita = Berita::where('judul', 'like', "%$search%")
            ->paginate(6)
            ->withQueryString();
    }

    $message = $berita->isEmpty() ? 'berita yang anda cari tidak ditemukan' : '';

    return view('gabungan', [
        'berita' => $berita,
        'kategori' => $kategori,
        'search' => $search,
        'judul_halaman' => 'Berita',
        'message' => $message
    ]);
}

}
