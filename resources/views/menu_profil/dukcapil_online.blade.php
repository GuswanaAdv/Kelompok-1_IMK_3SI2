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

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.0/ScrollTrigger.min.js"></script>
<script>
    // Register the ScrollTrigger plugin
    gsap.registerPlugin(ScrollTrigger);

    // Create a GSAP animation for elements with the class 'gsap-fade-up'
    gsap.utils.toArray('h2').forEach(h2 => {
        gsap.fromTo(h2, {
          opacity: 0,
          x: -90,
      },{
          opacity: 1,
          x: 0,
          duration: 1,
          delay: 0.5,
          scrollTrigger:h2
      });
    })

    gsap.utils.toArray('p').forEach(p => {
        gsap.fromTo(p, {
          opacity: 0,
          x: 90,
      },{
          opacity: 1,
          x: 0,
          duration: 1,
          delay: 0.5,
          scrollTrigger:p
      });
    })

    gsap.utils.toArray('li').forEach(li => {
        gsap.fromTo(li, {
          opacity: 0,
          x: -90,
      },{
          opacity: 1,
          x: 0,
          duration: 1,
          delay: 0.5,
          scrollTrigger:li
      });
    })
</script>
@endsection 