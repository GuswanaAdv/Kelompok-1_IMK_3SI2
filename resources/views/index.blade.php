@extends('layouts.app')

@section('content')
<div class="flex">
    <!-- Sidebar -->
    <div class="w-1/4 p-4 bg-white shadow-lg">
        <div class="mb-4">
            <h2 class="font-bold text-xl">Kategori</h2>
            <ul>
                <!-- Repeat for each category -->
                <li>
                    <input type="checkbox" id="category1" name="category1">
                    <label for="category1">Produk Hukum</label>
                </li>
                <li>
                    <input type="checkbox" id="category2" name="category2">
                    <label for="category2">Pendidikan</label>
                </li>
                <!-- More categories... -->
            </ul>
        </div>
        <!-- Other filters like Lembaga Desa, Produk Warga... -->
    </div>

    <!-- Main Content -->
    <div class="w-3/4 p-4">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Berita</h1>
            <div>
                <select class="border p-2">
                    <option>Populer</option>
                    <option>Terbaru</option>
                </select>
                <button id="grid-view" class="p-2 border">Grid</button>
                <button id="list-view" class="p-2 border">List</button>
            </div>
        </div>
        
        <div id="news-container" class="grid grid-cols-2 gap-4">
            <!-- Repeat for each news item -->
            <div class="bg-white p-4 shadow-lg">
                <img src="image.jpg" alt="News Image">
                <div class="p-2">
                    <span class="bg-green-700 text-white px-2 py-1">Pendidikan</span>
                    <h2 class="font-bold text-xl">Judul Berita</h2>
                    <p class="text-gray-600">23 Mei 2024 - Oleh Admin</p>
                    <a href="#" class="text-blue-500">Baca selengkapnya</a>
                </div>
            </div>
            <!-- More news items... -->
        </div>
        
        <!-- Pagination -->
        <div class="mt-4">
            <ul class="flex">
                <li class="mr-2"><a href="#" class="px-3 py-1 bg-gray-300">1</a></li>
                <li class="mr-2"><a href="#" class="px-3 py-1 bg-gray-300">2</a></li>
                <!-- More pagination links... -->
            </ul>
        </div>
    </div>
</div>

<script>
    document.getElementById('grid-view').addEventListener('click', function() {
        document.getElementById('news-container').classList.add('grid', 'grid-cols-2');
        document.getElementById('news-container').classList.remove('list');
    });

    document.getElementById('list-view').addEventListener('click', function() {
        document.getElementById('news-container').classList.remove('grid', 'grid-cols-2');
        document.getElementById('news-container').classList.add('list');
    });
</script>
@endsection
