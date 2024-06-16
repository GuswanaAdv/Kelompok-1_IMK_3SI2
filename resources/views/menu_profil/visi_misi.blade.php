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
        <h2 class="bg-darkgreen text-white py-2 rounded text-center text-2xl font-bold mb-4">Visi & Misi</h2>
        <div class="mb-4">
            <h3 class="mb-4 ml-4 font-roboto font-bold">Visi:</h3>
            <p class="mb-4 ml-4 font-roboto">“ Terwujudnya Desa Jatinegara yang Aman,Cerdas, Berkarakter, 
                Sehat dan Berbudaya serta Berahklak Mulia Disegala Bidang Kehidupan “</p>
        </div>

        <div class="mb-4 border-t pt-4">
            <h3 class="mb-4 ml-4 font-roboto font-bold">Misi</h3>
            <ol class="list-decimal list-inside ml-4">
                <li class="mb-4 ml-4 font-roboto">
                    Mewujudkan keamanan di Desa Jatinegara </li>
                <li class="mb-4 ml-4 font-roboto">
                    Meningkatkan tata kelola Pemerintah desa dalam pelayanan terhadap masyarakat Desa Jatinegara</li>
                <li class="mb-4 ml-4 font-roboto">
                    Meningkatkan kesehatan masyarakat serta kebersihan lingkungan</li>
                <li class="mb-4 ml-4 font-roboto">
                    Mewujudkan kehidupan masyarakat yang bercerminkan Pancasila</li>
                <li class="mb-4 ml-4 font-roboto">
                    Meningkatkan kegiatan Bumdes, dengan membuka program kemasarakatan mandiri untuk mengoptimalkan PADes</li>
                <li class="mb-4 ml-4 font-roboto">
                    Meningkatkan kehidupan yang Harmonis, Toleransi dan saling menghormati antar warga</li>
                <li class="mb-4 ml-4 font-roboto">
                    Meningkatkan Sarana dan Prasarana Ekonomi, Pendidikan,Kesehatan, Olah Raga dan budaya di Desa Jatinegara</li>
                <li class="mb-4 ml-4 font-roboto">
                    Meningkatkan kejujuran, Keadilan dan Transparasi dalam Pemerintahan Desa Jatinegara</li>
                <li class="mb-4 ml-4 font-roboto">
                    Menciptakan suasana kehidupan masarakat yang agamis</li>
            </ol>

        </div>
    </main>
</div>
@endsection 