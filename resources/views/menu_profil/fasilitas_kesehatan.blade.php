@extends('layouts.app')
@section('content')
<style>
    body{
        background-color:white;
    }
</style>

<div class="container mx-auto mt-0 flex">
    <!-- Sidebar -->
    @include('partials.sidebar')
    
    <!-- Main Content -->
    <main class="md:w-3/4 md:ml-4 sm:px-6 lg:px-8 bg-white shadow-md">
        <h2 class="bg-darkgreen text-white py-2 rounded text-center text-2xl font-bold mb-4">Fasilitas Kesehatan</h2>

        <div class="mb-7 pt-4">
            <p class="mb-4 ml-4 font-roboto">Berikut daftar fasilitas kesehatan 
                di Desa Jatinegara</p>
            <ol class="list-decimal list-inside ml-4">
                <li class="mb-4 ml-4 font-roboto">
                    Puskesmas Sempor 1 : Jl. Kaligandu, Jatinegara</li>
                <img src="https://fkm.unair.ac.id/wp-content/uploads/2023/11/46a.png" style="height: 300px" alt="Article Image" class="md:w-full mx-auto mb-4 rounded">
                <li class="mb-4 ml-4 font-roboto">
                    Klinik Keluarga : Jl. Tentara Pelajar Jatinegara</li>
                <img src="https://cdn0-production-images-kly.akamaized.net/zHkLpJi5kjQ_pTEPddSVnJCtXQs=/800x450/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4523720/original/086114900_1690991426-IMG-20230802-WA0010.jpg" style="height: 300px" alt="Article Image" class="md:w-full mx-auto mb-4 rounded">
                <li class="mb-4 ml-4 font-roboto">
                    Klinik Delima : Jl. Tentara Pelajar Jatinegara</li>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuFR4yyxvSXNfiaJN5PDHf5G4AByHzZbfj-Q&s" style="height: 300px" alt="Article Image" class="md:w-full mx-auto mb-4 rounded">
                <li class="mb-4 ml-4 font-roboto">
                    Praktik Drg. Isodora : Jl. Jl. Tentara Pelajar Jatinegara </li>
                <img src="https://jatengprov.go.id/wp-content/uploads/2018/12/IMG-20181226-WA0064.jpg" style="height: 300px" alt="Article Image" class="md:w-full mx-auto mb-4 rounded">
                <li class="mb-4 ml-4 font-roboto">
                    Apotik Pandya : Jl. Tentara Pelajar Jatinegara</li>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhdlJd740n-BgXLFoJhyQZ7456JeUmb4BdFDT0L9jpxVYVHsybgGcyhnM9ErKXGD6SfI8&usqp=CAU" style="height: 300px" alt="Article Image" class="md:w-full mx-auto mb-4 rounded">
                <li class="mb-4 ml-4 font-roboto">
                    Apotik Jatinegara : Jl. Tentara Pelajar Jatinegara</li>
                <img src="https://smartcity.gowakab.go.id/frontend/apotik_img/1665804676_225528576.JPG" style="height: 300px" alt="Article Image" class="md:w-full mx-auto mb-4 rounded">
            </ol>

        </div>
    </main>
</div>
@endsection 