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
        <h2 class="bg-darkgreen text-white py-2 rounded text-center text-2xl font-bold mb-4 fade-down">Dukcapil Online</h2>

        <div class="mb-7 pt-4">
            <p class="mb-4 ml-4 font-roboto fade-up">Untuk meningkatkan pelayanan terhadap masyarakat Kabupaten Kebumen, 
                Dinas Kependudukan dan Pencatatan Sipil Kabupaten Kebumen membuka pelayanan online dalam beberapa 
                pelayanan kependudukan, antara lain :</p>
            <ol class="list-decimal list-inside ml-4">
                <li class="mb-4 ml-4 font-roboto fade-left">
                    Akta Kelahiran</li>
                <li class="mb-4 ml-4 font-roboto fade-right">
                    Akta Kematian</li>
                <li class="mb-4 ml-4 font-roboto fade-left">
                    KTP Elektronik</li>
                <li class="mb-4 ml-4 font-roboto fade-right">
                    Kartu Keluarga</li>
                <li class="mb-4 ml-4 font-roboto fade-left">
                    Surat Perpindahan Keluar</li>
                <li class="mb-4 ml-4 font-roboto fade-right">
                    Surat Kedatangan</li>
                <li class="mb-4 ml-4 font-roboto fade-left">
                    Kartu Identitas Anak</li>
            </ol>

            <p class="mb-4 ml-4 mr-4 font-roboto fade-right">Pelayanan online ini diharapkan dapat mempermudah dan menjangkau lebih luas kepada masyarakat 
                Kebumen.  Silahkan klik tombol di bawah.</p>

            <a 
            class="fade-in mb-4 ml-4 font-roboto px-4 py-1 bg-green w-1/4 rounded text-white text-center hover:bg-darkgreen"
            href="http://pelayanan-kependudukan.kebumenkab.go.id/">
            Layanan Dukcapil Kebumen</a>

        </div>
    </main>
</div>

@endsection 