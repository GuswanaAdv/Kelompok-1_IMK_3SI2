<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Berita;
use Carbon\Carbon;

class BeritaController extends Controller
{
    public function index(Request $request): View
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

        $berita = Berita::paginate(6)->withQueryString();

        return view ('gabungan',[
            'berita' => $berita
        ]);
    }

}
