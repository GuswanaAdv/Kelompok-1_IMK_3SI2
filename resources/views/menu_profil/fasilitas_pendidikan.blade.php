@extends('layouts.app')
@section('content')
<div class="container mx-auto mt-0 pt-24 flex">
    <!-- Sidebar -->
    @include('partials.sidebar')
    
    <!-- Main Content -->
    <main class="w-3/4 p-4 bg-white shadow-md ml-4">
        <h2 class="bg-darkgreen text-white py-2 rounded text-center text-2xl font-bold mb-4">Fasilitas Pendidikan</h2>

        <div class="collapse w-4/4 mb-4 rounded shadow-md collapse-arrow py-0">
            <input type="checkbox" /> 
            <div class="collapse-title font-roboto font-bold">
                Pendidikan Anak Usia Dini (PAUD)
            </div>
            <div class="collapse-content border-t"> 
                <ol class="list-decimal list-inside ml-4 mt-6">
                    <li class="mb-4 ml-4 font-roboto">
                        PAUD LESTARI  1 : Jl. Kaligandu Jatinegara</li>
                    <li class="mb-4 ml-4 font-roboto">
                        PAUD LESTARI 2 : Jl. Kanjuruan Jatinegara</li>
                </ol>
            </div>
        </div>

        <div class="collapse w-4/4 mb-4 rounded shadow-md collapse-arrow py-0">
            <input type="checkbox" /> 
            <div class="collapse-title font-roboto font-bold">
                Taman Kanak-Kanak (TK)
            </div>
            <div class="collapse-content border-t"> 
                <ol class="list-decimal list-inside ml-4 mt-6">
                    <li class="mb-4 ml-4 font-roboto">
                        TK Pertiwi : Kompleks SDN 3 Jatinegara, Dukuh Salekan</li>
                    <li class="mb-4 ml-4 font-roboto">
                        TK At Taqwa : Kompleks Masjid Taqwa Jatinegara</li>
                    <li class="mb-4 ml-4 font-roboto">
                        TK Aisiyah : Kompleks Masjid Darussalam Jatinegara</li> 
                </ol>
                
            </div>
        </div>

        <div class="collapse w-4/4 mb-4 rounded shadow-md collapse-arrow py-0">
            <input type="checkbox" /> 
            <div class="collapse-title font-roboto font-bold">
                Sekolah Dasar (SD) Sederajat
            </div>
            <div class="collapse-content border-t"> 
                <ol class="list-decimal list-inside ml-4 mt-6">
                    <li class="mb-4 ml-4 font-roboto">
                        SDN 1 Jatinegara : Jl. Kaligandu Jatinegara </li>
                    <li class="mb-4 ml-4 font-roboto">
                        SDN 2 Jatinegara : Jl. Kaligede Jatinegara </li>
                    <li class="mb-4 ml-4 font-roboto">
                        SDN 3 Jatinegara : Jl. Romakebon Jatinegara</li>
                    <li class="mb-4 ml-4 font-roboto">
                        MI Plus Jatinegara : Kompleks Masjid Taqwa Jatinegara</li>
                </ol>
            </div>
        </div>

        <div class="collapse w-4/4 mb-4 rounded shadow-md collapse-arrow py-0">
            <input type="checkbox" /> 
            <div class="collapse-title font-roboto font-bold">
                Sekolah Menengah Pertama (SMP) Sederajat
            </div>
            <div class="collapse-content border-t">
                <ol class="list-decimal list-inside ml-4 mt-6">
                    <li class="mb-4 ml-4 font-roboto">
                        SMPN 1 Sempor : Jl. Kaligandu Jatinegara</li>
                    <li class="mb-4 ml-4 font-roboto">
                        SMP PGRI Sempor : Jl. Tentara Pelajar Jatinegara</li>
                    <li class="mb-4 ml-4 font-roboto">
                        SMP Purnama Sempor : Jl. Pogung Jatinegara</li>    
                </ol> 
            </div>
        </div>
    
        <script src="{{ asset('js/app.js') }}"></script>
    </main>
</div>
@endsection 