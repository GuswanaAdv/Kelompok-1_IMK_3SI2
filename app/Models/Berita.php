<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Berita extends Model
{
    use HasFactory;

    protected $primarKey= 'id';
    protected $table= 'berita';

    protected $fillable=[
        'judul',
        'slug',
        'preview',
        'konten',
        'kategori',
        'thumbnail',
        'published_datetime',
        'views'
    ];

    public $timestamps = true;

    public function getFormattedPublishedDatetimeAttribute()
    {
        return Carbon::parse($this->published_datetime)->translatedFormat('d F Y');
    }
}

