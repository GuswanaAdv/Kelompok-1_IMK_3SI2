@extends('layouts.app')
@section('content')
<div class="bg-white">
  <style>
    .filter-panel {
  display: none;
  height: 100%; /* Tambahkan tinggi penuh untuk panel */
  overflow-y: auto; /* Aktifkan scrolling vertikal */
}
@media (min-width: 768px) {
  .filter-panel {
    display: block !important;
    height: auto; /* Sesuaikan tinggi untuk layar besar */
    overflow-y: visible; /* Matikan scrolling vertikal untuk layar besar */
  }
  .filter-button, .search-button {
    display: none !important;
  }
}
  </style>

      {{-- header --}}
      <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-24">
        <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-6">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900">Berita</h1>
  
          <div class="flex items-center">
            <div class="relative inline-block text-left mr-4">
              <div>
                  <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900 border border-gray-300 rounded-md px-4 py-2" id="sortDropdownButton" aria-expanded="false" aria-haspopup="true">
                      Urutkan
                      <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                      </svg>
                  </button>
              </div>

              <form action="">
                <select name="" id=""></select>
              </form>
          
              {{-- <div id="sortDropdown" class="hidden absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="sortDropdownButton" tabindex="-1">
                  <div class="py-1" role="none">
                      <a href="{{ route('berita.index', array_merge(request()->query(), ['sort' => 'populer'])) }}" class="text-gray-900 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" data-sort="Popular" tabindex="-1">Populer</a>
                      <a href="{{ route('berita.index', array_merge(request()->query(), ['sort' => 'terbaru'])) }}" class="text-gray-500 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" data-sort="Terbaru" tabindex="-1">Terbaru</a>
                  </div>
              </div> --}}
          </div>

            <div class="filter-button md:hidden">
              {{-- kalo gk mau ada bordernya hapus border border-gray-300 rounded-md px-4 py-2 --}}
              <button id="filterToggleBtn" type="button" class="flex items-center -m-2 p-2 text-gray-400 hover:text-gray-500 border border-gray-300 rounded-md px-4 py-1.5 md:ml-6 lg:hidden">
                <span class="text-gray-700">Filter</span>
                <svg class="h-5 w-5 ml-2" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd" />
                </svg>
              </button>
            </div>

            <!-- Faceted Search Panel -->
            <div id="filterPanel" class="filter-panel fixed inset-0 bg-white p-6 z-50 md:relative md:inset-auto md:bg-transparent md:p-0 md:z-auto shadow-lg md:shadow-none">
              <div class="flex justify-between items-center mb-6 md:hidden">
                <h2 class="text-xl font-bold">Filters</h2>
                <button id="filterCloseBtn" class="text-gray-700 text-3xl">
                  &times;
                </button>
              </div>

              {{-- Facated --}}
              <div class="space-y-4 md:hidden">

                <!-- Category Filter -->
                <div class="border-t border-gray-200 px-4 py-6">
                  <h2 class="text-lg font-semibold mb-2">Kategori</h2>
                  <div class="space-y-2">
                    <div class="flex items-center">
                      <input id="filter-mobile-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                      <label for="filter-mobile-color-0" class="ml-3 min-w-0 flex-1 text-gray-500">Produk Hukum</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-mobile-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                        <label for="filter-mobile-color-1" class="ml-3 min-w-0 flex-1 text-gray-500">Pendidikan</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-mobile-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                        <label for="filter-mobile-color-2" class="ml-3 min-w-0 flex-1 text-gray-500">Motivasi</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-mobile-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                        <label for="filter-mobile-color-3" class="ml-3 min-w-0 flex-1 text-gray-500">Teknologi</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-mobile-color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                        <label for="filter-mobile-color-4" class="ml-3 min-w-0 flex-1 text-gray-500">UMKM</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-mobile-color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                        <label for="filter-mobile-color-5" class="ml-3 min-w-0 flex-1 text-gray-500">Wisata dan Sejarah</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-mobile-color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                        <label for="filter-mobile-color-5" class="ml-3 min-w-0 flex-1 text-gray-500">Galeri Desa</label>
                    </div>
                  </div>
                </div>
              
                <!-- Price Filter -->
                <div class="border-t border-gray-200 px-4 py-6">
                  <h2 class="text-lg font-semibold mb-2">Lembaga Desa</h2>
                  <div class="space-y-2">
                    <div class="flex items-center">
                      <input id="filter-mobile-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                      <label for="filter-mobile-category-0" class="ml-3 min-w-0 flex-1 text-gray-500">PKK Desa</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-mobile-category-1" name="category[]" value="sale" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                      <label for="filter-mobile-category-1" class="ml-3 min-w-0 flex-1 text-gray-500">KPMD Desa</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-mobile-category-2" name="category[]" value="travel" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                        <label for="filter-mobile-category-2" class="ml-3 min-w-0 flex-1 text-gray-500">LKMD Desa</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-mobile-category-3" name="category[]" value="organization" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                        <label for="filter-mobile-category-3" class="ml-3 min-w-0 flex-1 text-gray-500">BPD Desa</label>
                    </div>
                  </div>
                </div>
              
                <!-- Rating Filter -->
                <div class="border-t border-gray-200 px-4 py-6">
                  <h2 class="text-lg font-semibold mb-2">Produk Warga</h2>
                  <div class="space-y-2">
                    <div class="flex items-center">
                      <input id="filter-mobile-size-0" name="size[]" value="2l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                      <label for="filter-mobile-size-0" class="ml-3 min-w-0 flex-1 text-gray-500">Kuliner</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-mobile-size-1" name="size[]" value="6l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                      <label for="filter-mobile-size-1" class="ml-3 min-w-0 flex-1 text-gray-500">Oleh-oleh</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-mobile-size-2" name="size[]" value="12l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                      <label for="filter-mobile-size-2" class="ml-3 min-w-0 flex-1 text-gray-500">Kerajinan Tangan</label>
                    </div>
                  </div>
                </div>
              </div>
              {{-- end facated --}}
      
              <!-- Search Button for Small Screens -->
              <button id="searchButton" type="button" class="w-full p-3 block bg-darkgreen text-white px-4 py-2 rounded-md mt-4 mx-auto md:hidden">
                Cari
              </button>

            </div>
          </div>
        </div> 
  
        <section aria-labelledby="products-heading" class="pb-24 pt-6">
          <h2 id="products-heading" class="sr-only">Products</h2>

          <!-- Search bar -->
          <div class="relative max-w-lg mx-auto border-b border-gray-200 pb-6 lg:hidden">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center pb-6">
              <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </span>
            <input class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-darkgreen focus:outline-none focus:shadow-outline" type="text" placeholder="Cari">
          </div>
          
          <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4 ">
            <!-- Filters -->
            <form class="hidden lg:block">
              <h3 class="sr-only">Categories</h3>
              <div class="relative max-w-lg mx-auto border-b border-gray-200 pb-6">
                <span class="absolute inset-y-0 left-0 pl-3 flex items-center pb-6">
                    <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                        <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                    <input class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-darkgreen focus:outline-none focus:shadow-outline" type="text" placeholder="p">
                </div>
                
  
              <div class="border-b border-gray-200 py-6">
                <h3 class="-my-3 flow-root">
                    <!-- Expand/collapse section button -->
                    <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false" onclick="toggleSection('0')">
                        <span class="font-bold text-lg text-gray-900">Kategori</span>
                        <span class="ml-6 flex items-center">
                            <!-- Expand icon, show/hide based on section open state. -->
                            <svg id="expand-icon-0" class="h-5 w-5 hidden" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                            </svg>
                            <!-- Collapse icon, show/hide based on section open state. -->
                            <svg id="collapse-icon-0" class="h-5 w-5 " viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                            </svg>
                        </span>
                    </button>
                </h3>
                <!-- Filter section, show/hide based on section state. -->
                <div class="pt-6" id="filter-section-0">
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                            <label for="filter-color-0" class="ml-3 text-sm text-gray-600">Produk Hukum</label>
                        </div>
                        <div class="flex items-center">
                            <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                            <label for="filter-color-1" class="ml-3 text-sm text-gray-600">Pendidikan</label>
                        </div>
                        <div class="flex items-center">
                            <input id="filter-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                            <label for="filter-color-2" class="ml-3 text-sm text-gray-600">Motivasi</label>
                        </div>
                        <div class="flex items-center">
                            <input id="filter-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                            <label for="filter-color-3" class="ml-3 text-sm text-gray-600">Teknologi</label>
                        </div>
                        <div class="flex items-center">
                            <input id="filter-color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                            <label for="filter-color-4" class="ml-3 text-sm text-gray-600">UMKM</label>
                        </div>
                        <div class="flex items-center">
                            <input id="filter-color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                            <label for="filter-color-5" class="ml-3 text-sm text-gray-600">Wisata dan Sejarah</label>
                        </div>
                        <div class="flex items-center">
                            <input id="filter-color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                            <label for="filter-color-5" class="ml-3 text-sm text-gray-600">Galeri Desa</label>
                        </div>
                    </div>
                </div>
            </div>
              <div class="border-b border-gray-200 py-6">
                <h3 class="-my-3 flow-root">
                  <!-- Expand/collapse section button -->
                  <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-2" aria-expanded="false" onclick="toggleSection('2')">
                    <span class="font-bold text-lg text-gray-900">Lembaga Desa</span>
                    <span class="ml-6 flex items-center">
                      <!-- Expand icon, show/hide based on section open state. -->
                      <svg id="expand-icon-2" class="h-5 w-5 hidden" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                      </svg>
                      <!-- Collapse icon, show/hide based on section open state. -->
                      <svg id="collapse-icon-2" class="h-5 w-5 " viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  </button>
                </h3>
                <!-- Filter section, show/hide based on section state. -->
                <div class="pt-6 " id="filter-section-2">
                  <div class="space-y-4">
                    <div class="flex items-center">
                      <input id="filter-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                      <label for="filter-category-0" class="ml-3 text-sm text-gray-600">PKK Desa</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-category-1" name="category[]" value="sale" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                      <label for="filter-category-1" class="ml-3 text-sm text-gray-600">KPMD Desa</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-category-2" name="category[]" value="travel" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                      <label for="filter-category-2" class="ml-3 text-sm text-gray-600">LKMD Desa</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-category-3" name="category[]" value="organization" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                      <label for="filter-category-3" class="ml-3 text-sm text-gray-600">BPD Desa</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="border-b border-gray-200 py-6">
                <h3 class="-my-3 flow-root">
                  <!-- Expand/collapse section button -->
                  <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-3" aria-expanded="false" onclick="toggleSection('3')">
                    <span class="font-bold text-lg text-gray-900">Produk Warga</span>
                    <span class="ml-6 flex items-center">
                      <!-- Expand icon, show/hide based on section open state. -->
                      <svg id="expand-icon-3" class="h-5 w-5 hidden" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                      </svg>
                      <!-- Collapse icon, show/hide based on section open state. -->
                      <svg id="collapse-icon-3" class="h-5 w-5 " viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  </button>
                </h3>
                <!-- Filter section, show/hide based on section state. -->
                <div class="pt-6" id="filter-section-3">
                  <div class="space-y-4">
                    <div class="flex items-center">
                      <input id="filter-size-0" name="size[]" value="2l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                      <label for="filter-size-0" class="ml-3 text-sm text-gray-600">Kuliner</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-size-1" name="size[]" value="6l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                      <label for="filter-size-1" class="ml-3 text-sm text-gray-600">Oleh-oleh</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-size-2" name="size[]" value="12l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                      <label for="filter-size-2" class="ml-3 text-sm text-gray-600">Kerajinan Tangan</label>
                    </div>
                  </div>
                </div>
              </div>
            </form>
  
            <!-- Product grid -->
            <div class="lg:col-span-3">
              <!-- Your content -->
              @include('cardBerita',['berita'=>$berita])
              <!-- End content -->
          
              <div class="pt-6">
                <!-- Pagination =-->
              {{-- @include('pagination') --}}
              {{-- {{ $berita->onEachSide(1)->links('pagination::tailwind') }} --}}
              <div class="my-4">
                {{ $berita->links('vendor.pagination.tailwind') }}
            </div>
            
              <!-- End Pagination -->
              </div>
              
            </div>   
          </div>
        </section>
      </main>
    </div>
  </div>

  <script>
    // mengatur tampilan dropdown untuk opsi pengurutan
    document.getElementById('sortDropdownButton').addEventListener('click', function() {
      const dropdown = document.getElementById('sortDropdown');
      dropdown.classList.toggle('hidden');
    });

    document.querySelectorAll('#sortDropdown a').forEach(function(item) {
      item.addEventListener('click', function(event) {
        event.preventDefault();
        const sortText = this.getAttribute('data-sort');
        document.getElementById('sortDropdownButton').innerHTML = sortText + 
          ' <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">' +
          '<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />' +
          '</svg>';
        document.getElementById('sortDropdown').classList.add('hidden');
      });
    });

    document.addEventListener('click', function(event) {
      const isClickInside = document.getElementById('sortDropdownButton').contains(event.target);
      if (!isClickInside) {
        document.getElementById('sortDropdown').classList.add('hidden');
      }
    });

    // Close dan Open Kategori
    function toggleSection(sectionId) {
    const section = document.getElementById(`filter-section-${sectionId}`);
    const expandIcon = document.getElementById(`expand-icon-${sectionId}`);
    const collapseIcon = document.getElementById(`collapse-icon-${sectionId}`);
    
    if (section.classList.contains('hidden')) {
      section.classList.remove('hidden');
      expandIcon.classList.add('hidden');
      collapseIcon.classList.remove('hidden');
    } else {
      section.classList.add('hidden');
      expandIcon.classList.remove('hidden');
      collapseIcon.classList.add('hidden');
    }
  }

    // memastikan bahwa panel filter muncul saat tombol filter ditekan dan disembunyikan saat tombol close ditekan
    document.getElementById('filterToggleBtn').addEventListener('click', function() {
        document.getElementById('filterPanel').style.display = 'block';
      });
  
      document.getElementById('filterCloseBtn').addEventListener('click', function() {
        document.getElementById('filterPanel').style.display = 'none';
      });
</script>
@endsection