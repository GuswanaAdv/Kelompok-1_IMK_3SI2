<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function index()
    {
        $initialMarkers = [
            [
                'position' => [
                    'lat' => -7.578013,
                    'lng' => 109.4999611
                ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => -7.578013,
                    'lng' => 109.4999611
                ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => -7.578013,
                    'lng' => 109.4999611
                ],
                'draggable' => true
            ]
        ];
        return view('menu_profil.profil_umum', [
            'judul_halaman' => 'Profil & Fasilitas',
            'menu_sidebar' => 'Profil Umum'
        ], compact('initialMarkers'));
    }
}