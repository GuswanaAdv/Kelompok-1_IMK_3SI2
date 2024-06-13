@extends('layouts.app')

@section('content')
@extends('layouts.app')
@section('content')
<div class="bg-white">
  <style>
    .filter-panel {
      display: none;
      height: 100%;
      overflow-y: auto;
    }
    @media (min-width: 768px) {
      .filter-panel {
        display: block !important;
        height: auto;
        overflow-y: visible;
      }
      .filter-button, .search-button {
        display: none !important;
      }
    }
  </style>

  <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
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
          <div id="sortDropdown" class="hidden absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="sortDropdownButton" tabindex="-1">
            <div class="py-1" role="none">
              <a href="{{ route('berita.index', ['sort' => 'populer']) }}" class="text-gray-900 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" data-sort="Popular" tabindex="-1">Popular</a>
              <a href="{{ route('berita.index', ['sort' => 'terbaru']) }}" class="text-gray-500 block px-4 py-2 text-sm hover:bg-gray-100" role="menuitem" data-sort="Terbaru" tabindex="-1">Terbaru</a>
            </div>
          </div>
        </div>
        <div class="filter-button md:hidden block">
          <button id="filterToggleBtn" type="button" class="flex items-center -m-2 p-2 text-gray-400 hover:text-gray-500 border border-gray-300 rounded-md px-4 py-1.5 md:ml-6 lg:hidden">
            <span class="text-gray-700">Filter</span>
            <svg class="h-5 w-5 ml-2" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
        <div id="filterPanel" class="filter-panel fixed inset-0 bg-white p-6 z-50 md:relative md:inset-auto md:bg-transparent md:p-0 md:z-auto shadow-lg md:shadow-none">
          <div class="flex justify-between items-center mb-6 md:hidden">
            <h2 class="text-xl font-bold">Filters</h2>
            <button id="filterCloseBtn" class="text-gray-700 text-3xl">
              &times;
            </button>
          </div>
          <div class="space-y-4 md:hidden">
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
                  <input id="filter-mobile-color-6" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                  <label for="filter-mobile-color-6" class="ml-3 min-w-0 flex-1 text-gray-500">Galeri Desa</label>
                </div>
              </div>
            </div>
            <div class="border-t border-gray-200 px-4 py-6">
              <h2 class="text-lg font-semibold mb-2">Lembaga Desa</h2>
              <div class="space-y-2">
                <div class="flex items-center">
                  <input id="filter-mobile-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-3" class="h-5 w-5 " viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
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
              <!-- Replace with your content -->
              <div class="border-4 border-dashed border-gray-200 rounded-lg h-96 lg:h-full">
                <!-- Your product content goes here -->
              </div>
              <!-- /End replace -->
            </div>
          </div>
        </section>
      </main>

  <script>
    document.getElementById('filterToggleBtn').addEventListener('click', function() {
      var filterPanel = document.getElementById('filterPanel');
      filterPanel.classList.toggle('block');
    });
    
    document.getElementById('filterCloseBtn').addEventListener('click', function() {
      var filterPanel = document.getElementById('filterPanel');
      filterPanel.classList.toggle('block');
    });

    document.getElementById('sortDropdownButton').addEventListener('click', function() {
      var sortDropdown = document.getElementById('sortDropdown');
      sortDropdown.classList.toggle('hidden');
    });

    document.addEventListener('click', function(event) {
      var sortDropdown = document.getElementById('sortDropdown');
      var sortDropdownButton = document.getElementById('sortDropdownButton');
      if (!sortDropdown.contains(event.target) && !sortDropdownButton.contains(event.target)) {
        sortDropdown.classList.add('hidden');
      }
    });

    function toggleSection(sectionId) {
      var section = document.getElementById('filter-section-' + sectionId);
      var expandIcon = document.getElementById('expand-icon-' + sectionId);
      var collapseIcon = document.getElementById('collapse-icon-' + sectionId);
      var isExpanded = section.getAttribute('aria-expanded') === 'true';
      section.setAttribute('aria-expanded', !isExpanded);
      section.classList.toggle('hidden');
      expandIcon.classList.toggle('hidden');
      collapseIcon.classList.toggle('hidden');
    }
  </script>
</div>
@endsection


@endsection
  