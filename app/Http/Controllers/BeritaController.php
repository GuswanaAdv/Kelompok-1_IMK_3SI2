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
        Carbon::setLocale('id');
        
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('judul', 'LIKE', "%{$search}%")
                  ->orWhere('slug', 'LIKE', "%{$search}%");
        }

        // Handle sort query
        if ($request->has('sort')) {
            if ($request->input('sort') == 'populer') {
                $query->orderBy('views', 'desc');
            } elseif ($request->input('sort') == 'terbaru') {
                $query->orderBy('published_datetime', 'desc');
            }
        }

        $berita = Berita::paginate(6)->withQueryString();

        return view ('gabungan',[
            'berita' => $berita
        ]);
    }
}
