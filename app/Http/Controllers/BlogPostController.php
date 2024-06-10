<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function index()
    {
        $blogPosts = [
            (object)[
                'judul' => 'Judul Pertama',
                'body' => 'Isi dari postingan pertama.',
                'tanggal' => '2024-06-01',
            ],
            (object)[
                'judul' => 'Judul Kedua',
                'body' => 'Isi dari postingan kedua.',
                'tanggal' => '2024-06-02',
            ],
            (object)[
                'judul' => 'Judul Ketiga',
                'body' => 'Isi dari postingan ketiga.',
                'tanggal' => '2024-06-03',
            ],
        ];

        return view('blog.index', compact('blogPosts'));
    }
}
