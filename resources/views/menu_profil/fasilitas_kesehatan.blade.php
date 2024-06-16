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
    <main class="md:w-3/4 md:ml-4 p-4 bg-white shadow-md">
        <h2 class="bg-darkgreen text-white py-2 rounded text-center text-2xl font-bold mb-4">Fasilitas Kesehatan</h2>

        <div class="mb-7 pt-4">
            <p class="mb-4 ml-4 font-roboto">Berikut daftar fasilitas kesehatan 
                di Desa Jatinegara</p>
            <ol class="list-decimal list-inside ml-4">
                <li class="mb-4 ml-4 font-roboto">
                    Puskesmas Sempor 1 : Jl. Kaligandu, Jatinegara</li>
                <img src="https://picsum.photos/id/188/800/200" alt="Article Image" class="w-full mx-auto mb-4 rounded">
                <li class="mb-4 ml-4 font-roboto">
                    Klinik Keluarga : Jl. Tentara Pelajar Jatinegara</li>
                <img src="https://picsum.photos/id/188/800/200" alt="Article Image" class="w-full mx-auto mb-4 rounded">
                <li class="mb-4 ml-4 font-roboto">
                    Klinik Delima : Jl. Tentara Pelajar Jatinegara</li>
                <img src="https://picsum.photos/id/188/800/200" alt="Article Image" class="w-full mx-auto mb-4 rounded">
                <li class="mb-4 ml-4 font-roboto">
                    Praktik Drg. Isodora : Jl. Jl. Tentara Pelajar Jatinegara </li>
                <img src="https://picsum.photos/id/188/800/200" alt="Article Image" class="w-full mx-auto mb-4 rounded">
                <li class="mb-4 ml-4 font-roboto">
                    Apotik Pandya : Jl. Tentara Pelajar Jatinegara</li>
                <img src="https://picsum.photos/id/188/800/200" alt="Article Image" class="w-full mx-auto mb-4 rounded">
                <li class="mb-4 ml-4 font-roboto">
                    Apotik Jatinegara : Jl. Tentara Pelajar Jatinegara</li>
                <img src="https://picsum.photos/id/188/800/200" alt="Article Image" class="w-full mx-auto mb-4 rounded">
            </ol>

        </div>
    </main>
</div>
@endsection 