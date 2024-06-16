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
                    <img src="https://www.garudabilingualschool.com/wp-content/uploads/2018/01/20150814_112638.jpg" style="height:300px" alt="Article Image" class="w-full mx-auto mb-4 rounded">
                    <li class="mb-4 ml-4 font-roboto">
                        PAUD LESTARI 2 : Jl. Kanjuruan Jatinegara</li>
                    <img src="https://www.garudabilingualschool.com/wp-content/uploads/2018/01/20150814_112638.jpg" style="height:300px" alt="Article Image" class="w-full mx-auto mb-4 rounded">
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
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEigRQUUq-pzvi1fhaVEijFXB2kIT_lD_v5i0sc_qC84bnBKCVO1f7beVMAIMZIYjlG2KLgmPvDvI-RYtXiGUuUuP-ir8G7PRSt3kcPO3rLkWJ2uHK_aEXmb2rJRbfhk-4R9hXlt0SRI92u3/w610-h404/DSC_0795.JPG" style="height: 300px" alt="Article Image" class="w-full mx-auto mb-4 rounded">
                    <li class="mb-4 ml-4 font-roboto">
                        TK At Taqwa : Kompleks Masjid Taqwa Jatinegara</li>
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEigRQUUq-pzvi1fhaVEijFXB2kIT_lD_v5i0sc_qC84bnBKCVO1f7beVMAIMZIYjlG2KLgmPvDvI-RYtXiGUuUuP-ir8G7PRSt3kcPO3rLkWJ2uHK_aEXmb2rJRbfhk-4R9hXlt0SRI92u3/w610-h404/DSC_0795.JPG" style="height: 300px" alt="Article Image" class="w-full mx-auto mb-4 rounded">
                    <li class="mb-4 ml-4 font-roboto">
                        TK Aisiyah : Kompleks Masjid Darussalam Jatinegara</li>
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEigRQUUq-pzvi1fhaVEijFXB2kIT_lD_v5i0sc_qC84bnBKCVO1f7beVMAIMZIYjlG2KLgmPvDvI-RYtXiGUuUuP-ir8G7PRSt3kcPO3rLkWJ2uHK_aEXmb2rJRbfhk-4R9hXlt0SRI92u3/w610-h404/DSC_0795.JPG" style="height: 300px" alt="Article Image" class="w-full mx-auto mb-4 rounded"> 
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
                    <img src="https://dindikpora.jogjakota.go.id/assets/instansi/dindikpora/article/20230825142314.jpeg" style="height: 300px" alt="Article Image" class="w-full mx-auto mb-4 rounded">
                    <li class="mb-4 ml-4 font-roboto">
                        SDN 2 Jatinegara : Jl. Kaligede Jatinegara </li>
                    <img src="https://dindikpora.jogjakota.go.id/assets/instansi/dindikpora/article/20230825142314.jpeg" style="height: 300px" alt="Article Image" class="w-full mx-auto mb-4 rounded">
                    <li class="mb-4 ml-4 font-roboto">
                        SDN 3 Jatinegara : Jl. Romakebon Jatinegara</li>
                    <img src="https://dindikpora.jogjakota.go.id/assets/instansi/dindikpora/article/20230825142314.jpeg" style="height: 300px" alt="Article Image" class="w-full mx-auto mb-4 rounded">
                    <li class="mb-4 ml-4 font-roboto">
                        MI Plus Jatinegara : Kompleks Masjid Taqwa Jatinegara</li>
                    <img src="https://dindikpora.jogjakota.go.id/assets/instansi/dindikpora/article/20230825142314.jpeg" style="height: 300px" alt="Article Image" class="w-full mx-auto mb-4 rounded">
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
                    <img src="https://www.smpn115-jkt.sch.id/uploads/images/medium/banner_1_4__medium.jpg" style="height: 300px" alt="Article Image" class="w-full mx-auto mb-4 rounded">
                    <li class="mb-4 ml-4 font-roboto">
                        SMP PGRI Sempor : Jl. Tentara Pelajar Jatinegara</li>
                    <img src="https://www.smpn115-jkt.sch.id/uploads/images/medium/banner_1_4__medium.jpg" style="height: 300px" alt="Article Image" class="w-full mx-auto mb-4 rounded">
                    <li class="mb-4 ml-4 font-roboto">
                        SMP Purnama Sempor : Jl. Pogung Jatinegara</li>
                    <img src="https://www.smpn115-jkt.sch.id/uploads/images/medium/banner_1_4__medium.jpg" style="height: 300px" alt="Article Image" class="w-full mx-auto mb-4 rounded">    
                </ol> 
            </div>
        </div>
    
        <script src="{{ asset('js/app.js') }}"></script>
    </main>
</div>
@endsection 