<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Berita;
use Exception;

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

    public function sort()
    {
        $kategori = !empty(request('kategori'))?explode(',',request('kategori')):array();
        $search = request('cari_berita1');
        $sort = request('sort');

        // Handle sort query
        if($sort === 'populer') {
            if (!empty($kategori)) {
                $berita = Berita::where('judul', 'like', "%$search%")->orderBy('views', 'desc');
                $berita = $berita->whereIn('kategori', $kategori)->paginate(6)->withQueryString();
            } else {
                $berita = Berita::where('judul', 'like', "%$search%")->orderBy('views', 'desc')->paginate(6)->withQueryString();
            }
         } else{
            if (!empty($kategori)) {
                $berita = Berita::where('judul', 'like', "%$search%")->orderBy('published_datetime', 'desc');
                $berita = $berita->whereIn('kategori', $kategori)->paginate(6)->withQueryString();
            } else {
                $berita = Berita::where('judul', 'like', "%$search%")->orderBy('published_datetime', 'desc')->paginate(6)->withQueryString();
            }
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

    public function search(Request $request)
    {   
        $search = $request->input('cari_berita1');
        $berita = is_array($request->input('berita')) ? $request->input('berita') : array();
        $lembaga = is_array($request->input('lembaga')) ? $request->input('lembaga') : array();
        $produk = is_array($request->input('produk')) ? $request->input('produk') : array();
        $kategori = array_merge($berita, $lembaga, $produk);

        if (!empty($kategori)) {
            $berita = Berita::where('judul', 'like', "%$search%");
            $berita = $berita->whereIn('kategori', $kategori)->paginate(6)->withQueryString();
        } else {
            $berita = Berita::where('judul', 'like', "%$search%")->paginate(6)->withQueryString();
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
            $berita = Berita::where('judul', 'like', "%$search%");
            $berita = $berita->whereIn('kategori', $kategori)->paginate(6)->withQueryString();
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

    public function beritaPage($slug)
    {
        try {
            // Menggunakan where untuk mencari berdasarkan slug
            $berita = Berita::where('slug', $slug)->first();
    
            if (!$berita) {
                return response()->json(['error' => 'Berita tidak ditemukan'], 404);
            }
    
            // Gantikan [h] dengan <h1> dan [p] dengan <p>
            $berita->konten = str_replace('[h]', '<h3 class="text-sm sm:text-base md:text-lg lg:text-xl font-bold text-green-700 mb-0">', $berita->konten);
            $berita->konten = str_replace('[/h]', '</h3>', $berita->konten);
            $berita->konten = str_replace('[p]', '<p class="text-sm sm:text-base md:text-lg lg:text-xl">', $berita->konten);
            $berita->konten = str_replace('[/p]', '</p>', $berita->konten);
    
            // Tambahkan spasi antara paragraf dan judul
            $berita->konten = str_replace("\n", '<br>', $berita->konten);
        
            // Get 4 articles with the same category, sorted by newest first
            $relatedArticles = Berita::where('id', '!=', $berita->id) // Exclude the current article itself
                ->where(function ($query) use ($berita) {
                    $categories = explode(',', $berita->kategori);
                    foreach ($categories as $category) {
                        $query->orWhere('kategori', 'like', '%' . trim($category) . '%');
                    }
                })
                ->orderBy('created_at', 'desc') // Sort by newest first
                ->limit(4)
                ->get();

            return view('berita_page', [
                'judul_halaman' => "Halaman Berita",
                'berita' => $berita,
                'relatedArticles' => $relatedArticles
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
