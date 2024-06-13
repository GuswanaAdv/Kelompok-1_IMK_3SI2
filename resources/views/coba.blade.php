<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <!-- Title -->
    <title>Hello, world!</title>

    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon  -->
    <link rel="icon" href="src/img/favicon.png">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!--Styles-->
    <link rel="stylesheet" href="src/css/style.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>

  <body class="text-gray-700 pt-9 sm:pt-10">

    <div class="bg-white">
      <div>
        <!-- Mobile filter dialog -->
        <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
          <!-- Off-canvas menu backdrop -->
          <div class="inset-0 bg-black bg-opacity-25" id="filter-backdrop" style="display: none;"></div>
    
          <div class="absolute right-0 top-0 flex">
            <!-- Off-canvas menu -->
            <div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl" id="filter-menu" style="display: none;">
              <div class="flex items-center justify-between px-4">
                <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                <button type="button" class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400" id="close-filter-menu">
                  <span class="sr-only">Close menu</span>
                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
              <!-- Filters -->
              <form class="mt-4 border-t border-gray-200">
                <h3 class="sr-only">Categories</h3>
                <div class="border-t border-gray-200 px-4 py-6">
                  <h3 class="-mx-2 -my-3 flow-root">
                    <!-- Expand/collapse section button -->
                    <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-0" aria-expanded="false">
                      <span class="font-bold text-lg text-gray-900">Kategori</span>
                      <span class="ml-6 flex items-center">
                        <!-- Expand icon, show/hide based on section open state. -->
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                        </svg>
                        <!-- Collapse icon, show/hide based on section open state. -->
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                        </svg>
                      </span>
                    </button>
                  </h3>
                  <!-- Filter section, show/hide based on section state. -->
                  <div class="pt-6" id="filter-section-mobile-0">
                    <div class="space-y-6">
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
                </div>
                <div class="border-t border-gray-200 px-4 py-6">
                  <h3 class="-mx-2 -my-3 flow-root">
                    <!-- Expand/collapse section button -->
                    <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-1" aria-expanded="false">
                      <span class="font-bold text-lg text-gray-900">Lembaga Desa</span>
                      <span class="ml-6 flex items-center">
                        <!-- Expand icon, show/hide based on section open state. -->
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                        </svg>
                        <!-- Collapse icon, show/hide based on section open state. -->
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />
                        </svg>
                      </span>
                    </button>
                  </h3>
                  <!-- Filter section, show/hide based on section state. -->
                  <div class="pt-6" id="filter-section-mobile-1">
                    <div class="space-y-6">
                      <div class="flex items-center">
                        <input id="filter-mobile-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                        <label for="filter-mobile-category-0" class="ml-3 min-w-0 flex-1 text-gray-500">Badan Permusyawaratan Desa</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-mobile-category-1" name="category[]" value="sale" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                        <label for="filter-mobile-category-1" class="ml-3 min-w-0 flex-1 text-gray-500">PKK</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-mobile-category-2" name="category[]" value="travel" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                        <label for="filter-mobile-category-2" class="ml-3 min-w-0 flex-1 text-gray-500">Karang Taruna</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-mobile-category-3" name="category[]" value="organization" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                        <label for="filter-mobile-category-3" class="ml-3 min-w-0 flex-1 text-gray-500">LPMD</label>
                      </div>
                      <div class="flex items-center">
                        <input id="filter-mobile-category-4" name="category[]" value="accessories" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                        <label for="filter-mobile-category-4" class="ml-3 min-w-0 flex-1 text-gray-500">Lainnya</label>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    <!-- Sort -->

    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-6">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900">Berita</h1>
  
        <div class="flex items-center">
          <div class="relative inline-block text-left">
            <div>
              <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                <span id="menu-button-text">Urutkan</span>
                <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
              </button>
            </div>
            <div id="dropdown-menu" class="hidden absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
              <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Popular</a>
              <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Terbaru</a>
            </div>
          </div>
          <button type="button" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
            <span class="sr-only">Filters</span>
            <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
      </div>
  
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          var menuButton = document.getElementById('menu-button');
          var menuButtonText = document.getElementById('menu-button-text');
          var dropdownMenu = document.getElementById('dropdown-menu');
          var menuItems = dropdownMenu.querySelectorAll('[role="menuitem"]');
  
          menuButton.addEventListener('click', function () {
            var expanded = menuButton.getAttribute('aria-expanded') === 'true' || false;
            menuButton.setAttribute('aria-expanded', !expanded);
            dropdownMenu.classList.toggle('hidden');
          });
  
          menuItems.forEach(function (item) {
            item.addEventListener('click', function (event) {
              event.preventDefault();
              menuButtonText.textContent = this.textContent;
  
              // Update the active/inactive classes
              menuItems.forEach(function (el) {
                el.classList.remove('font-medium', 'text-gray-900');
                el.classList.add('text-gray-500');
              });
  
              this.classList.remove('text-gray-500');
              this.classList.add('font-medium', 'text-gray-900');
  
              dropdownMenu.classList.add('hidden');
              menuButton.setAttribute('aria-expanded', 'false');
            });
          });
  
          // Optional: Close the dropdown when clicking outside of it
          document.addEventListener('click', function (event) {
            if (!menuButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
              dropdownMenu.classList.add('hidden');
              menuButton.setAttribute('aria-expanded', 'false');
            }
          });
        });
        
        document.addEventListener("DOMContentLoaded", function() {
      const filterMenu = document.getElementById("filter-menu");
      const filterBackdrop = document.getElementById("filter-backdrop");
      const filterButton = document.getElementById("filter-button");
      const closeButton = document.getElementById("close-filter-menu");

      filterButton.addEventListener("click", function() {
        filterMenu.style.display = "block";
        filterBackdrop.style.display = "block";
      });

      closeButton.addEventListener("click", function() {
        filterMenu.style.display = "none";
        filterBackdrop.style.display = "none";
      });

      filterBackdrop.addEventListener("click", function() {
        filterMenu.style.display = "none";
        filterBackdrop.style.display = "none";
      });
    });

        function toggleFilterMenu() {
          const filterMenu = document.getElementById('filter-menu');
          const filterBackdrop = document.getElementById('filter-backdrop');
          const isMenuVisible = filterMenu.style.display === 'block';

          filterMenu.style.display = isMenuVisible ? 'none' : 'block';
          filterBackdrop.style.display = isMenuVisible ? 'none' : 'block';
        }

        document.getElementById('filter-backdrop').addEventListener('click', toggleFilterMenu);

        // document.getElementById('filter-backdrop').addEventListener('click', toggleFilterMenu);document.getElementById('close-filter-menu').addEventListener('click', toggleFilterMenu);
      </script>
    </main>
  </body>
  

</html>