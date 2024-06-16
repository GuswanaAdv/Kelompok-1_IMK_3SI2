<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BerandaController extends Controller
{
    public function beranda()
    {
        try {    
            // Mengambil 3 berita terbaru terurut berdasarkan published_datetime
            $beritaTerbaru = Berita::orderBy('published_datetime', 'desc')
                ->take(3)  // Ambil 3 data teratas
                ->get();

            // Mendapatkan 5 berita dengan views terbanyak
            $beritaPopular = Berita::orderBy('views', 'desc')
                ->take(5)
                ->get();

            return view('beranda', [
                'judul_halaman' => "Beranda",
                'beritaTerbaru' => $beritaTerbaru,
                'beritaPopular' => $beritaPopular
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
