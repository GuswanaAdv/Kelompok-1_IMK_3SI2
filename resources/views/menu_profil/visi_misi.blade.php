@extends('layouts.app')
@section('content')
<style>
    body {
        background-color: white;
    }
</style>

<div class="container mx-auto mt-0 flex">
    <!-- Sidebar -->
    @include('partials.sidebar')

    <!-- Main Content -->
    <main class="md:w-3/4 md:ml-4 sm:px-6 lg:px-8 bg-white shadow-md">
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
<<<<<<< HEAD

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

    // Create a GSAP animation for elements with the class 'gsap-fade-up'
    gsap.utils.toArray('h3').forEach(h3 => {
        gsap.fromTo(h3, {
          opacity: 0,
          x: -90,
      },{
          opacity: 1,
          x: 0,
          duration: 1,
          delay: 0.5,
          scrollTrigger:h3
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
          x: 90,
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
=======
@endsection
>>>>>>> 30d38736485d3999948c5e8aac72d5a4feb8df47
