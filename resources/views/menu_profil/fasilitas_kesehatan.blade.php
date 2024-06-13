@extends('layouts.app')
@section('content')
<div class="container mx-auto mt-0 pt-24 flex">
    <!-- Sidebar -->
    @include('partials.sidebar')
    
    <!-- Main Content -->
    <main class="w-3/4 p-4 bg-white shadow-md ml-4">
        <h2 class="bg-darkgreen text-white py-2 rounded text-center text-2xl font-bold mb-4">Fasilitas Kesehatan</h2>

        <div class="mb-7 pt-4">
            <p class="mb-4 ml-4 font-roboto">Berikut daftar fasilitas kesehatan 
                di Desa Jatinegara</p>
            <ol class="list-decimal list-inside ml-4">
                <li class="mb-4 ml-4 font-roboto">
                    Puskesmas Sempor 1 : Jl. Kaligandu, Jatinegara</li>
                <li class="mb-4 ml-4 font-roboto">
                    Klinik Keluarga : Jl. Tentara Pelajar Jatinegara</li>
                <li class="mb-4 ml-4 font-roboto">
                    Klinik Delima : Jl. Tentara Pelajar Jatinegara</li>
                <li class="mb-4 ml-4 font-roboto">
                    Praktik Drg. Isodora : Jl. Jl. Tentara Pelajar Jatinegara </li>
                <li class="mb-4 ml-4 font-roboto">
                    Apotik Pandya : Jl. Tentara Pelajar Jatinegara</li>
                <li class="mb-4 ml-4 font-roboto">
                    Apotik Jatinegara : Jl. Tentara Pelajar Jatinegara</li>
            </ol>

        </div>
    </main>
</div>
@endsection 