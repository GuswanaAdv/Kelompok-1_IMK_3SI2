<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Berita;
use Carbon\Carbon;

class BeritaController extends Controller
{
    public function index(): View
    {
        $berita = Berita::paginate(6)->withQueryString();

        return view ('gabungan',[
            'berita' => $berita,
            'kategori' => array()
        ]);
    }

    public function search(Request $request)
    {
        $search = $request->input('cari_berita1');
        $berita = is_array($request->input('berita')) ? $request->input('berita') : array();
        $lembaga = is_array($request->input('lembaga')) ? $request->input('lembaga') : array();
        $produk = is_array($request->input('produk')) ? $request->input('produk') : array();
        $kategori = array_merge($berita,$lembaga,$produk);
        // dump($category);
        $berita = Berita::where('judul', 'like', "%$search%")->whereIn('kategori',$kategori)->paginate(6)->withQueryString();

        return view('gabungan',[
            'berita' => $berita,
            'kategori' => $kategori
        ]);
    }
}
