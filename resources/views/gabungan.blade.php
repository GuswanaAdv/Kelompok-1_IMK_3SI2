@extends('layouts.app')
@section('content')
<div class="bg-white">
  <style>
    body{
      background-color:white;
    }
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

  <script>
    function submitPaginationForm(page) {
        var form = document.getElementById('pagination-form');
        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'page';
        input.value = page;
        form.appendChild(input);
        form.submit();
    }
  </script>

      {{-- header --}}
      <main class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="flex items-end justify-between border-b border-gray-200 pb-0 pt-6">
          <h1 class="text-3xl font-bold tracking-tight text-gray-900 mr-2 pb-3 sm:pb-1">Berita</h1>
  
          <div class="flex items-center">
            <div class="flex items-center">
              <div class="relative inline-block text-left mr-1">
                  <div>
                      <form action="{{route('berita.sort')}}" method="GET" id="sortForm" name="sortForm">
                          @csrf
                          <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900 border border-gray-300 bg-white rounded-md px-4 py-2 mb-2 sm:mb-0" id="sortDropdownButton" aria-expanded="false" aria-haspopup="true">
                              @if(request('sort') == 'populer')
                                  Populer
                              @elseif(request('sort') == 'terbaru')
                                  Terbaru
                              @else
                                  Urutkan
                              @endif
                              <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                              </svg>
                          </button>
          
                          <div id="sortDropdown" class="hidden absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="sortDropdownButton" tabindex="-1">
                              <div class="py-1" role="none">
                                  <input type="hidden" name="cari_berita1" value="{{!empty($search)? $search : ''}}">
                                  <input type="hidden" name="kategori" value="{{!empty($kategori)? implode(', ', $kategori) : ''}}">
                                  <button type="submit" name="sort" value="populer" class="text-gray-900 block w-full text-left px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1">Populer</button>
                                  <button type="submit" name="sort" value="terbaru" class="text-gray-500 block w-full text-left px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" tabindex="-1">Terbaru</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
          
            <div class="filter-button lg:hidden">
              {{-- kalo gk mau ada bordernya hapus border border-gray-300 bg-white rounded-md px-4 py-2 --}}
              <button id="filterToggleBtn" type="button" class="flex items-center text-gray-400 hover:text-gray-500 border border-gray-300 bg-white rounded-md px-4 py-2 mb-2 sm:mb-0 md:ml-6 lg:hidden">
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

              <form action="{{ route('berita.pagination') }}" method="GET" id="cari" name="cari">

              {{-- Facated --}}
              <div class="space-y-4 md:hidden bg-white">

                <!-- Category Filter -->
                <div class="border-t border-gray-200 px-4 py-6 bg-white">
                  <h2 class="text-lg font-semibold mb-2">Kategori</h2>
                  <div class="space-y-2 bg-white">
                    <div class="flex items-center bg-white">
                      <input id="filter-color-0" name="berita[]" value="Produk Hukum" type="checkbox" {{in_array('Produk Hukum', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                      <label for="filter-color-0" class="ml-3 text-sm text-gray-600">Produk Hukum</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-color-1" name="berita[]" value="Pendidikan" type="checkbox" {{in_array('Pendidikan', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                        <label for="filter-color-1" class="ml-3 text-sm text-gray-600">Pendidikan</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-color-2" name="berita[]" value="Motivasi" type="checkbox" {{in_array('Motivasi', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                        <label for="filter-color-2" class="ml-3 text-sm text-gray-600">Motivasi</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-color-3" name="berita[]" value="Teknologi" type="checkbox" {{in_array('Teknologi', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                        <label for="filter-color-3" class="ml-3 text-sm text-gray-600">Teknologi</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-color-4" name="berita[]" value="UMKM" type="checkbox" {{in_array('UMKM', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                        <label for="filter-color-4" class="ml-3 text-sm text-gray-600">UMKM</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-color-5" name="berita[]" value="Wisata dan Sejarah" type="checkbox" {{in_array('Wisata dan Sejarah', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                        <label for="filter-color-5" class="ml-3 text-sm text-gray-600">Wisata dan Sejarah</label>
                    </div>
                    <div class="flex items-center">
                        <input id="filter-color-5" name="berita[]" value="Galeri Desa" type="checkbox" {{in_array('Galeri Desa', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                        <label for="filter-color-5" class="ml-3 text-sm text-gray-600">Galeri Desa</label>
                    </div>
                  </div>
                </div>
              
                <!-- Price Filter -->
                <div class="border-t border-gray-200 px-4 py-6">
                  <h2 class="text-lg font-semibold mb-2">Lembaga Desa</h2>
                  <div class="space-y-2">
                    <div class="flex items-center">
                      <input id="filter-category-0" name="lembaga[]" value="PKK Desa" type="checkbox" {{in_array('PKK Desa', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                      <label for="filter-category-0" class="ml-3 text-sm text-gray-600">PKK Desa</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-category-1" name="lembaga[]" value="KPMD Desa" type="checkbox" {{in_array('KPMD Desa', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                      <label for="filter-category-1" class="ml-3 text-sm text-gray-600">KPMD Desa</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-category-2" name="lembaga[]" value="LKMD Desa" type="checkbox" {{in_array('LKMD Desa', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                      <label for="filter-category-2" class="ml-3 text-sm text-gray-600">LKMD Desa</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-category-3" name="lembaga[]" value="BPD Desa" type="checkbox" {{in_array('BPD Desa', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                      <label for="filter-category-3" class="ml-3 text-sm text-gray-600">BPD Desa</label>
                    </div>
                  </div>
                </div>
              
                <!-- Rating Filter -->
                <div class="border-t border-gray-200 px-4 py-6">
                  <h2 class="text-lg font-semibold mb-2">Produk Warga</h2>
                  <div class="space-y-2">
                    <div class="flex items-center">
                      <input id="filter-size-0" name="produk[]" value="Kuliner" type="checkbox" {{in_array('Kuliner', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                      <label for="filter-size-0" class="ml-3 text-sm text-gray-600">Kuliner</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-size-1" name="produk[]" value="Oleh-oleh" type="checkbox" {{in_array('Oleh-oleh', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                      <label for="filter-size-1" class="ml-3 text-sm text-gray-600">Oleh-oleh</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-size-2" name="produk[]" value="Kerajinan Tangan" type="checkbox" {{in_array('Kerajinan Tangan', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                      <label for="filter-size-2" class="ml-3 text-sm text-gray-600">Kerajinan Tangan</label>
                    </div>
                  </div>
                </div>
              </div>
              {{-- end facated --}}
      
              <!-- Search Button for Small Screens -->
              <input name="cari_berita1" type="hidden" class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-darkgreen focus:outline-none focus:shadow-outline" 
              value="{{!empty($search)? $search : ''}}" type="text" placeholder="Cari">
              <div class="py-6">
                <button type="submit" class="w-full p-3 block bg-darkgreen text-white px-4 py-2 rounded-md mt-4 mx-auto  focus:ring-darkgreen md:hidden">Cari</button>
              </div>
            </form>
            </div>
          </div>
        </div> 
  
        <section aria-labelledby="products-heading" class="pb-2 pt-6">
          <h2 id="products-heading" class="sr-only">Products</h2>

          <!-- Search bar -->
          <div class="relative max-w-lg mx-auto border-b border-gray-200 pb-6 lg:hidden bg-white">
            <form action="{{ route('berita.pagination') }}" method="GET" id="cari" name="cari" class="relative inline-block w-full bg-white">
              @csrf
              <button type="submit" class="absolute inset-y-0 right-0 flex items-center pr-4">
                  <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                      <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
              </button>
              <input name="cari_berita1" class="w-full bg-white border rounded-md pl-10 pr-4 py-2 focus:border-darkgreen focus:outline-none focus:shadow-outline" 
              value="{{!empty($search)? $search : ''}}" type="text" placeholder="Cari">
          </form>
          </div>
          
          <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4 bg-white">
            <!-- Filters -->
            <form class="hidden lg:block" action="{{ route('berita.pagination') }}" method="GET" id="cari" name="cari">
              @csrf
              <h3 class="sr-only">Categories</h3>
              <div class="relative max-w-lg mx-auto border-b border-gray-200 pb-6 bg-white">
                    <input id="cari_berita1" name="cari_berita1" value="{{!empty($search)? $search : ''}}" class="w-full border rounded-md pl-4 pr-4 py-2 focus:border-darkgreen focus:outline-none focus:shadow-outline bg-white" 
                    type="text" placeholder="Cari">
                    <button type ="submit" class="absolute inset-y-0 right-0 flex items-center pb-6 pr-4">
                      <svg class="h-5 w-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                          <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                  </button>
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
                            <input id="filter-color-0" name="berita[]" value="Produk Hukum" type="checkbox" {{in_array('Produk Hukum', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                            <label for="filter-color-0" class="ml-3 text-sm text-gray-600">Produk Hukum</label>
                        </div>
                        <div class="flex items-center">
                            <input id="filter-color-1" name="berita[]" value="Pendidikan" type="checkbox" {{in_array('Pendidikan', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                            <label for="filter-color-1" class="ml-3 text-sm text-gray-600">Pendidikan</label>
                        </div>
                        <div class="flex items-center">
                            <input id="filter-color-2" name="berita[]" value="Motivasi" type="checkbox" {{in_array('Motivasi', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                            <label for="filter-color-2" class="ml-3 text-sm text-gray-600">Motivasi</label>
                        </div>
                        <div class="flex items-center">
                            <input id="filter-color-3" name="berita[]" value="Teknologi" type="checkbox" {{in_array('Teknologi', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                            <label for="filter-color-3" class="ml-3 text-sm text-gray-600">Teknologi</label>
                        </div>
                        <div class="flex items-center">
                            <input id="filter-color-4" name="berita[]" value="UMKM" type="checkbox" {{in_array('UMKM', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                            <label for="filter-color-4" class="ml-3 text-sm text-gray-600">UMKM</label>
                        </div>
                        <div class="flex items-center">
                            <input id="filter-color-5" name="berita[]" value="Wisata dan Sejarah" type="checkbox" {{in_array('Wisata dan Sejarah', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                            <label for="filter-color-5" class="ml-3 text-sm text-gray-600">Wisata dan Sejarah</label>
                        </div>
                        <div class="flex items-center">
                            <input id="filter-color-5" name="berita[]" value="Galeri Desa" type="checkbox" {{in_array('Galeri Desa', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
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
                      <input id="filter-category-0" name="lembaga[]" value="PKK Desa" type="checkbox" {{in_array('PKK Desa', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                      <label for="filter-category-0" class="ml-3 text-sm text-gray-600">PKK Desa</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-category-1" name="lembaga[]" value="KPMD Desa" type="checkbox" {{in_array('KPMD Desa', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                      <label for="filter-category-1" class="ml-3 text-sm text-gray-600">KPMD Desa</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-category-2" name="lembaga[]" value="LKMD Desa" type="checkbox" {{in_array('LKMD Desa', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                      <label for="filter-category-2" class="ml-3 text-sm text-gray-600">LKMD Desa</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-category-3" name="lembaga[]" value="BPD Desa" type="checkbox" {{in_array('BPD Desa', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
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
                      <input id="filter-size-0" name="produk[]" value="Kuliner" type="checkbox" {{in_array('Kuliner', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                      <label for="filter-size-0" class="ml-3 text-sm text-gray-600">Kuliner</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-size-1" name="produk[]" value="Oleh-oleh" type="checkbox" {{in_array('Oleh-oleh', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                      <label for="filter-size-1" class="ml-3 text-sm text-gray-600">Oleh-oleh</label>
                    </div>
                    <div class="flex items-center">
                      <input id="filter-size-2" name="produk[]" value="Kerajinan Tangan" type="checkbox" {{in_array('Kerajinan Tangan', $kategori)? 'checked' : ''}} class="h-4 w-4 rounded border-gray-300 bg-white text-darkgreen focus:ring-darkgreen">
                      <label for="filter-size-2" class="ml-3 text-sm text-gray-600">Kerajinan Tangan</label>
                    </div>
                  </div>
                </div>
              </div>
              {{-- <div class="py-6">
                <button type="submit" class="w-full p-3 block bg-darkgreen text-white px-4 py-2 rounded-md mt-4 mx-auto  focus:ring-darkgreen">Cari</button>
            </div> --}}
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
              <div class="mr-10 sm:mr-4 ml-0 sm:ml-4">
                {{ $berita->onEachSide(1)->links('vendor.pagination.tailwind') }}
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