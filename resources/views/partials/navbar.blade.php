<div class="hidden lg:block w-full bg-gradient-to-r from-lime-500 from-5% via-green via-10% to-darkgreen to-95% h-[67px] absolute z-20 top-0 left-0 blur-[6.6px] drop-shadow-[0_4px_4px_rgba(0,0,0,0.25)]"></div>
<nav class="bg-gradient-to-r z-40 absolute w-full from-lime-500 from-5% via-green via-10% to-darkgreen to-95% lg:drop-shadow-[0_4px_4px_rgba(0,0,0,0.10)]">
  </div>
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 pr-4 right-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button id="menu-button" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-green hover:bg-opacity-25 hover:text-green focus:outline-none focus:ring-2 focus:ring-inset focus:ring-green" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <!--
              Icon when menu is closed.
  
              Menu open: "hidden", Menu closed: "block"
            -->
          <svg id="menu-icon-closed" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
              Icon when menu is open.
  
              Menu open: "block", Menu closed: "hidden"
            -->
          <svg id="menu-icon-open" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-between sm:items-stretch sm:justify-between">
        <a class="flex flex-shrink-0 items-center" href="{{ route('beranda') }}">
          <img class="h-8 w-auto" src="https://jatinegara.kec-sempor.kebumenkab.go.id/assets/logo/kbm.png" alt="Your Company">
          <h1 class="text-lg text-white ml-3 font-roboto font-semibold">Desa Jatinegara</h1>
        </a>
        <div class="hidden sm:ml-6 sm:block lg:mr-52 ">
          <div class="flex space-x-4">
            <ul class="menu menu-horizontal px-2">
              <li class="md:ml-4 lg:ml-8"><a href="{{ route('beranda') }}" class="{{$judul_halaman=='Beranda'? 'bg-green bg-opacity-50':''}} text-white hover:bg-green hover:bg-opacity-25 rounded-md hover:text-white px-2 py-2 text-xs font-roboto font-bold " aria-current="page">BERANDA</a></li>
              <li class="md:ml-4 lg:ml-8">
                <details>
                  <summary id="pc-profilfasilitas" class="{{$judul_halaman=='Profil & Fasilitas'? 'bg-green bg-opacity-50 px-5':''}} text-white hover:bg-green hover:bg-opacity-25 rounded-md hover:text-white px-2 py-2 text-xs font-roboto font-bold">
                    PROFIL & FASILITAS
                  </summary>
                  <ul id="pc-sub-profilfasilitas" class="p-2 bg-base-100 rounded-t-none bg-white">
                    <li class="bg-white">
                      <details>
                        <summary class="text-black bg-white hover:bg-green hover:bg-opacity-30 rounded-md px-4 py-2 text-xs font-roboto font-bold" style="width:220px;">
                          PROFIL
                        </summary>
                        <ul class="p-2 bg-base-100 rounded-t-none bg-white">
                          <li><a class="bg-white hover:bg-green hover:bg-opacity-30" href="{{ route('profil') }}" style="width:200px;">Profil Umum</a></li>
                          <li><a class="bg-white hover:bg-green hover:bg-opacity-30" href="{{ route('visi_misi') }}" style="width:200px;">Visi Misi</a></li>
                          <li><a class="bg-white hover:bg-green hover:bg-opacity-30" href="{{ route('profil_pemerintahan') }}" style="width:200px;">Profil Pemerintahan</a></li>
                          <li><a class="bg-white hover:bg-green hover:bg-opacity-30" href="{{ route('profil_kelembagaan') }}" style="width:200px;">Profil Kelembagaan</a></li>
                        </ul>
                      </details>
                    </li>
                    <li class="bg-white">
                      <details>
                        <summary class="text-black hover:bg-green hover:bg-opacity-30 rounded-md px-4 py-2 text-xs font-roboto font-bold" style="width:220px;">
                          FASILITAS
                        </summary>
                        <ul class="p-2 bg-base-100 rounded-t-none bg-white">
                          <li><a class="bg-white hover:bg-green hover:bg-opacity-30" href="{{ route('dukcapil_online') }}" style="width:200px;">Dukcapil Online</a></li>
                          <li><a class="bg-white hover:bg-green hover:bg-opacity-30" href="{{ route('fasilitas_pendidikan') }}" style="width:200px;">Fasilitas Pendidikan</a></li>
                          <li><a class="bg-white hover:bg-green hover:bg-opacity-30" href="{{ route('fasilitas_kesehatan') }}" style="width:200px;">Fasilitas Kesehatan</a></li>
                        </ul>
                      </details>
                    </li>
                  </ul>
                </details>
              </li>
              <li class="md:ml-4 lg:ml-8"><a href="{{ route('berita.index') }}" class="{{$judul_halaman=='Berita'? 'bg-green bg-opacity-50':''}} text-white hover:bg-green hover:bg-opacity-25 rounded-md hover:text-white px-2 py-2 text-xs font-roboto font-bold">BERITA</a></li>
              <li class="md:ml-4 lg:ml-8">
                <details>
                  <summary id="pc-datadesa" class="{{$judul_halaman=='Data Desa'? 'bg-green bg-opacity-50':''}} text-white hover:bg-green hover:bg-opacity-25 rounded-md hover:text-white px-2 py-2 text-xs font-roboto font-bold">
                    DATA DESA
                  </summary>
                  <ul id="pc-sub-datadesa" class="p-2 bg-base-100 rounded-t-none bg-white">
                    <li><a class="bg-white text-black hover:bg-green hover:bg-opacity-30" style="width:200px;" href="{{ route('datadesa') }}">Kategori Umur</a></li>
                    <li><a class="bg-white text-black hover:bg-green hover:bg-opacity-30" style="width:200px;" href="{{ route('datadesa.pendidikan') }}">Kategori Pendidikan</a></li>
                    <li><a class="bg-white text-black hover:bg-green hover:bg-opacity-30" style="width:200px;" href="{{ route('datadesa.pekerjaan') }}">Kategori Pekerjaan</a></li>
                    <li><a class="bg-white text-black hover:bg-green hover:bg-opacity-30" style="width:200px;" href="{{ route('datadesa.status_kawin') }}">Kategori Status Pernikahan</a></li>
                  </ul>
                </details>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="hidden sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="{{ route('beranda') }}" class="{{$judul_halaman=='Beranda'? 'bg-white bg-opacity-25':''}} text-white hover:bg-white hover:bg-opacity-25 hover:text-white block rounded-md px-3 py-2 text-sm font-roboto">BERANDA</a>
      <div id="profilfasilitas" class="flex justify-between items-center pr-4 {{$judul_halaman=='Profil dan Fasilitas'? 'bg-white bg-opacity-25':''}} text-white hover:bg-white hover:bg-opacity-25 hover:text-white block rounded-md px-3 py-2 text-sm font-roboto">
        PROFIL & FASILITAS
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
        </svg>
      </div>
      <div class="hidden pl-3 space-y-1" id="profilfasilitas-sub">
        <div id="profil" class="flex justify-between items-center pr-4 text-white hover:bg-white hover:bg-opacity-25 hover:text-white block rounded-md px-3 py-2 text-sm font-roboto">
          PROFIL
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
          </svg>
        </div>
        <div class="hidden" id="profil-sub">
          <a href="{{ route('profil') }}" class="text-white hover:bg-white hover:bg-opacity-25 hover:text-white block rounded-md px-3 py-2 text-sm font-roboto pl-6">Profil Umum</a>
          <a href="{{ route('visi_misi') }}" class="text-white hover:bg-white hover:bg-opacity-25 hover:text-white block rounded-md px-3 py-2 text-sm font-roboto pl-6">Visi Misi</a>
          <a href="{{ route('profil_pemerintahan') }}" class="text-white hover:bg-white hover:bg-opacity-25 hover:text-white block rounded-md px-3 py-2 text-sm font-roboto pl-6">Profil Pemerintahan</a>
          <a href="{{ route('profil_kelembagaan') }}" class="text-white hover:bg-white hover:bg-opacity-25 hover:text-white block rounded-md px-3 py-2 text-sm font-roboto pl-6">Profil Kelembagaan</a>
        </div>
        <div id="fasilitas" class="flex justify-between items-center pr-4 text-white hover:bg-white hover:bg-opacity-25 hover:text-white block rounded-md px-3 py-2 text-sm font-roboto">
          FASILITAS
          <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
          </svg>
        </div>
        <div class="hidden" id="fasilitas-sub">
          <a href="{{ route('dukcapil_online') }}" class="text-white hover:bg-white hover:bg-opacity-25 hover:text-white block rounded-md px-3 py-2 text-sm font-roboto pl-6">Dukcapil Online</a>
          <a href="{{ route('fasilitas_pendidikan') }}" class="text-white hover:bg-white hover:bg-opacity-25 hover:text-white block rounded-md px-3 py-2 text-sm font-roboto pl-6">Fasilitas Pendidikan</a>
          <a href="{{ route('fasilitas_kesehatan') }}" class="text-white hover:bg-white hover:bg-opacity-25 hover:text-white block rounded-md px-3 py-2 text-sm font-roboto pl-6">Fasilitas Kesehatan</a>
        </div>
      </div>
      <a href="{{ route('berita.index') }}" class="{{$judul_halaman=='Berita'? 'bg-white bg-opacity-25':''}} text-white hover:bg-white hover:bg-opacity-25 hover:text-white block rounded-md px-3 py-2 text-sm font-roboto">BERITA</a>
      <a href="{{ route('datadesa') }}" class="{{$judul_halaman=='Data Desa'? 'bg-white bg-opacity-25':''}} text-white hover:bg-white hover:bg-opacity-25 hover:text-white block rounded-md px-3 py-2 text-sm font-roboto">DATA DESA</a>
    </div>
  </div>
</nav>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var menuButton = document.getElementById('menu-button');
    var menuIconClosed = document.getElementById('menu-icon-closed');
    var menuIconOpen = document.getElementById('menu-icon-open');
    var mobileMenu = document.getElementById('mobile-menu');
    var profilMenu = document.getElementById('profil');
    var profilSubMenu = document.getElementById('profil-sub');
    var fasilitasMenu = document.getElementById('fasilitas');
    var fasilitasSubMenu = document.getElementById('fasilitas-sub');
    var profilfasilitasMenu = document.getElementById('profilfasilitas');
    var profilfasilitasSubMenu = document.getElementById('profilfasilitas-sub');
    var pcprofilfasilitasMenu = document.getElementById('pc-profilfasilitas');
    var pcprofilfasilitasSubMenu = document.getElementById('pc-sub-profilfasilitas');
    var pcdatadesaMenu = document.getElementById('pc-datadesa');
    var pcdatadesaSubMenu = document.getElementById('pc-sub-datadesa');

    menuButton.addEventListener('click', function() {
      // Toggle menu visibility
      mobileMenu.classList.toggle('hidden');

      // Toggle icon visibility
      menuIconClosed.classList.toggle('hidden');
      menuIconOpen.classList.toggle('hidden');
    });

    profilfasilitasMenu.addEventListener('click', function() {
      // Toogle profil menu visibility
      profilfasilitasSubMenu.classList.toggle('hidden');
    });

    profilMenu.addEventListener('click', function() {
      // Toogle profil menu visibility
      profilSubMenu.classList.toggle('hidden');
      fasilitasSubMenu.classList.add('hidden');
    });

    fasilitasMenu.addEventListener('click', function() {
      // Toogle profil menu visibility
      fasilitasSubMenu.classList.toggle('hidden');
      profilSubMenu.classList.add('hidden');
    })
  });
</script>