<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Category</title>

    <style>
        body {
            font-family: 'Oxygen', sans-serif;
        }
    </style>
</head>
<body>
    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<div class="bg-white">
    <div>
      <!--
        Mobile filter dialog
  
        Off-canvas filters for mobile, show/hide based on off-canvas filters state.
      -->
      
      <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
        <!--
          Off-canvas menu backdrop, show/hide based on off-canvas menu state.
  
          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
          {{-- <div class="fixed bg-black bg-opacity-25"></div>
    
          <div class="absolute right-0 top-0 flex"> --}}

          <div class="fixed inset-0 bg-black bg-opacity-25"></div>

          <div class="fixed inset-0 z-40 flex">

          <!--
            Off-canvas menu, show/hide based on off-canvas menu state.
  
            Entering: "transition ease-in-out duration-300 transform"
              From: "translate-x-full"
              To: "translate-x-0"
            Leaving: "transition ease-in-out duration-300 transform"
              From: "translate-x-0"
              To: "translate-x-full"
          -->
          <div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl" id="filter-menu">
            <div class="flex items-center justify-between px-4">
                <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                <button type="button" class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400" onclick="toggleFilterMenu()">
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
                                <input id="filter-mobile-color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-darkgreen focus:ring-darkgreen">
                                <label for="filter-mobile-color-5" class="ml-3 min-w-0 flex-1 text-gray-500">Galeri Desa</label>
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
                          </div>
                          <div class="border-t border-gray-200 px-4 py-6">
                          <h3 class="-mx-2 -my-3 flow-root">
                          <!-- Expand/collapse section button -->
                          <button type="button" class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500" aria-controls="filter-section-mobile-2" aria-expanded="false">
                              <span class="font-bold text-lg text-gray-900">Produk Warga</span>
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
                          <div class="pt-6" id="filter-section-mobile-2">
                          <div class="space-y-6">
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
            </form>
          </div>
        </div>
      </div>
  
      <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
         <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-6">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900">Berita</h1>
  
          <div class="flex items-center">
            <div class="relative inline-block text-left">
              <div>
                {{-- <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true"> --}}

                <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">
                  Urutkan
                  <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
  
              <!--
                Dropdown menu, show/hide based on menu state.
  
                Entering: "transition ease-out duration-100"
                  From: "transform opacity-0 scale-95"
                  To: "transform opacity-100 scale-100"
                Leaving: "transition ease-in duration-75"
                  From: "transform opacity-100 scale-100"
                  To: "transform opacity-0 scale-95"
              -->
              <div id="dropdown-menu" class="hidden absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">

              {{-- <div class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"> --}}
                <div class="py-1" role="none">
                  <!--
                    Active: "bg-gray-100", Not Active: ""
  
                    Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"
                  -->
                  <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Popular</a>
                  <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Terbaru</a>
                </div>
              </div>
            </div>
  
            {{-- <button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
              <span class="sr-only">View grid</span>
              <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z" clip-rule="evenodd" />
              </svg>
            </button> --}}
            <button type="button" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
              <span class="sr-only">Filters</span>
              <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>
        </div> 
  
        <section aria-labelledby="products-heading" class="pb-24 pt-6">
          <h2 id="products-heading" class="sr-only">Products</h2>
  
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
                    <input class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-darkgreen focus:outline-none focus:shadow-outline" type="text" placeholder="Search">

                    {{-- <input class="w-full border rounded-md pl-10 pr-4 py-2 focus:border-blue-500 focus:outline-none focus:shadow-outline" type="text" placeholder="Search"> --}}
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
              @include('cardBerita')
              <!-- End content -->
          
              <div class="pt-6">
                <!-- Pagination =-->
              @include('pagination')
              <!-- End Pagination -->
              </div>
              
            </div>   
          </div>
        </section>
      </main>
    </div>
  </div>

  <script>
    // Function to toggle the visibility of the filter menu
    // function toggleFilterMenu() {
    //     var filterMenu = document.getElementById('filter-menu');
    //     var backdrop = document.querySelector('.bg-black');
        
    //     filterMenu.classList.toggle('translate-x-full'); // Toggle the position of the filter menu
    //     filterMenu.classList.toggle('translate-x-0');
        
    //     backdrop.classList.toggle('opacity-0'); // Toggle the opacity of the backdrop
    //     backdrop.classList.toggle('opacity-100');
    // }


    document.addEventListener('DOMContentLoaded', function () {
        var menuButton = document.getElementById('menu-button');
        var dropdownMenu = document.getElementById('dropdown-menu');

        menuButton.addEventListener('click', function () {
            var expanded = menuButton.getAttribute('aria-expanded') === 'true' || false;
            menuButton.setAttribute('aria-expanded', !expanded);
            dropdownMenu.classList.toggle('hidden');
        });

        // Optional: Close the dropdown when clicking outside of it
        document.addEventListener('click', function (event) {
            if (!menuButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
                menuButton.setAttribute('aria-expanded', 'false');
            }
        });
    });

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

  function toggleFilterMenu() {
        var menu = document.getElementById('filter-menu');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
        }
    }
</script>

</body>
</html>