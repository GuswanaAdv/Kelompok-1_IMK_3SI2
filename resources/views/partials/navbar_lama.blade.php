<nav class="bg-gradient-to-r z-40 absolute w-full from-lime-500 from-5% via-green via-10% to-darkgreen to-95% drop-shadow-lg backdrop-filter backdrop-blur-sm bg-opacity-10 border-b border-gray-300">

  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 pr-4 right-0 flex items-center md:hidden">
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
        <div class="flex flex-shrink-0 items-center">
          <img class="h-8 w-auto" src="https://jatinegara.kec-sempor.kebumenkab.go.id/assets/logo/kbm.png" alt="Your Company">
          <h1 class="text-lg text-white ml-3 font-roboto font-semibold">Desa Jatinegara</h1>
        </div>
        <div class="hidden sm:ml-6 lg:block mr-52 ">
          <div class="flex space-x-4">
            <a href="{{ route('beranda') }}" class="{{$judul_halaman=='Beranda'? 'border-b border-b-white':''}} text-white hover:bg-green hover:bg-opacity-25 rounded-md px-1 py-2 text-xs font-roboto" aria-current="page">BERANDA</a>
            <a href="{{ route('profil') }}" class="{{$judul_halaman=='Profil dan Fasilitas'? 'border-b border-b-white':''}} text-white hover:bg-green hover:bg-opacity-25 rounded-md hover:text-white px-1 py-2 text-xs font-roboto">PROFIL & FASILITAS<span class="pl-2"> <i class="fa-solid fa-angle-down"> </span></i></a>
            <a href="{{ route('berita.index') }}" class="{{$judul_halaman=='Berita'? 'border-b border-b-white':''}} text-white hover:bg-green hover:bg-opacity-25 rounded-md hover:text-white px-1 py-2 text-xs font-roboto">BERITA</a>
            <a href="{{ route('datadesa') }}" class="{{$judul_halaman=='Data Desa'? 'border-b border-b-white':''}} text-white hover:bg-green hover:bg-opacity-25 rounded-md hover:text-white px-1 py-2 text-xs font-roboto">DATA DESA <span class="pl-2"> <i class="fa-solid fa-angle-down"> </span></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="{{ route('beranda') }}" class="{{$judul_halaman=='Beranda'? 'bg-white bg-opacity-25':''}} text-white block rounded-md px-3 py-2 text-sm font-roboto">BERANDA</a>
      <a href="{{ route('profil') }}" class="{{$judul_halaman=='Profil dan Fasilitas'? 'bg-white bg-opacity-25':''}} text-white hover:bg-white hover:bg-opacity-25 hover:text-white block rounded-md px-3 py-2 text-sm font-roboto">PROFIL & FASILITAS</a>
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

    menuButton.addEventListener('click', function() {
      // Toggle menu visibility
      mobileMenu.classList.toggle('hidden');

      // Toggle icon visibility
      menuIconClosed.classList.toggle('hidden');
      menuIconOpen.classList.toggle('hidden');

    });
  });
</script>