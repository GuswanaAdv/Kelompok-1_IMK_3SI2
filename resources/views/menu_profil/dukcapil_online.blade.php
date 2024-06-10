@extends('layouts.app')
@section('content')
<div class="container mx-auto mt-4 flex">
    <!-- Sidebar -->
    @include('partials.sidebar')
    
    <!-- Main Content -->
    <main class="w-3/4 p-4 bg-white shadow-md ml-4">
        <h2 class="bg-darkgreen text-white py-2 rounded text-center text-2xl font-bold mb-4">Dukcapil Online</h2>

        <div class="mb-7 pt-4">
            <p class="mb-4 ml-4 font-roboto">Untuk meningkatkan pelayanan terhadap masyarakat Kabupaten Kebumen, 
                Dinas Kependudukan dan Pencatatan Sipil Kabupaten Kebumen membuka pelayanan online dalam beberapa 
                pelayanan kependudukan, antara lain :</p>
            <ol class="list-decimal list-inside ml-4">
                <li class="mb-4 ml-4 font-roboto">
                    Akta Kelahiran</li>
                <li class="mb-4 ml-4 font-roboto">
                    Akta Kematian</li>
                <li class="mb-4 ml-4 font-roboto">
                    KTP Elektronik</li>
                <li class="mb-4 ml-4 font-roboto">
                    Kartu Keluarga</li>
                <li class="mb-4 ml-4 font-roboto">
                    Surat Perpindahan Keluar</li>
                <li class="mb-4 ml-4 font-roboto">
                    Surat Kedatangan</li>
                <li class="mb-4 ml-4 font-roboto">
                    Kartu Identitas Anak</li>
            </ol>

            <p class="mb-4 ml-4 mr-4 font-roboto">Pelayanan online ini diharapkan dapat mempermudah dan menjangkau lebih luas kepada masyarakat 
                Kebumen.  Silahkan klik tombol di bawah.</p>

            <a 
            class="mb-4 ml-4 font-roboto px-4 py-1 bg-green w-1/4 rounded text-white text-center hover:bg-darkgreen"
            href="http://pelayanan-kependudukan.kebumenkab.go.id/">
            Layanan Dukcapil Kebumen</a>

        </div>
    </main>
</div>
@endsection 