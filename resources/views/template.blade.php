<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Faceted Search with Tailwind CSS</title>
  <script src="https://cdn.tailwindcss.com"></script>
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
</head>
<body class="bg-gray-100 p-4">

  <!-- Container -->
  <div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-lg relative">

    <!-- Filter Button for Small Screens -->
    <div class="filter-button absolute top-4 right-4 md:hidden">
      <button id="filterToggleBtn" class="bg-blue-600 text-white p-2 rounded">
        Filter
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
      <div class="space-y-4">
        <!-- Category Filter -->
        <div>
          <h2 class="text-lg font-semibold mb-2">Category</h2>
          <div class="space-y-2">
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="electronics">
              <span class="ml-2 text-gray-700">Electronics</span>
            </label>
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="books">
              <span class="ml-2 text-gray-700">Books</span>
            </label>
          </div>
        </div>

        <!-- Category Filter -->
        <div>
          <h2 class="text-lg font-semibold mb-2">Category</h2>
          <div class="space-y-2">
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="electronics">
              <span class="ml-2 text-gray-700">Electronics</span>
            </label>
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="books">
              <span class="ml-2 text-gray-700">Books</span>
            </label>
          </div>
        </div>

        <!-- Category Filter -->
        <div>
          <h2 class="text-lg font-semibold mb-2">Category</h2>
          <div class="space-y-2">
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="electronics">
              <span class="ml-2 text-gray-700">Electronics</span>
            </label>
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="books">
              <span class="ml-2 text-gray-700">Books</span>
            </label>
          </div>
        </div>

        <!-- Category Filter -->
        <div>
          <h2 class="text-lg font-semibold mb-2">Category</h2>
          <div class="space-y-2">
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="electronics">
              <span class="ml-2 text-gray-700">Electronics</span>
            </label>
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="books">
              <span class="ml-2 text-gray-700">Books</span>
            </label>
          </div>
        </div>

        <!-- Category Filter -->
        <div>
          <h2 class="text-lg font-semibold mb-2">Category</h2>
          <div class="space-y-2">
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="electronics">
              <span class="ml-2 text-gray-700">Electronics</span>
            </label>
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="books">
              <span class="ml-2 text-gray-700">Books</span>
            </label>
          </div>
        </div>
        
        <!-- Price Filter -->
        <div>
          <h2 class="text-lg font-semibold mb-2">Price Range</h2>
          <div class="space-y-2">
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="0-50">
              <span class="ml-2 text-gray-700">$0 - $50</span>
            </label>
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="50-100">
              <span class="ml-2 text-gray-700">$50 - $100</span>
            </label>
          </div>
        </div>
        
        <!-- Rating Filter -->
        <div>
          <h2 class="text-lg font-semibold mb-2">Rating</h2>
          <div class="space-y-2">
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="4-5">
              <span class="ml-2 text-gray-700">4 Stars & Up</span>
            </label>
            <label class="flex items-center">
              <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" value="3-4">
              <span class="ml-2 text-gray-700">3 Stars & Up</span>
            </label>
          </div>
        </div>
      </div>

      <!-- Search Button for Small Screens -->
      <div class="search-button mt-6 md:hidden">
        <button id="searchBtn" class="w-full bg-green-600 text-white p-3 rounded">
          Cari
        </button>
      </div>
    </div>
    
    <!-- Sort Dropdown and Search Results Section -->
    <div class="mt-6 md:ml-64">
      <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Search Results</h2>
        <!-- Sort Dropdown -->
        <div class="relative inline-block text-left">
          <div>
            <button type="button" id="sortDropdownButton" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" aria-expanded="true" aria-haspopup="true">
              Sort By
              <!-- Heroicon name: chevron-down -->
              <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>
          </div>

          <div id="sortDropdown" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="sortDropdownButton">
            <div class="py-1" role="none">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" data-sort="Popular">Popular</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" data-sort="Newest">Newest</a>
            </div>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Example Result Card -->
        <div class="bg-white p-4 rounded-lg shadow">
          <h3 class="text-lg font-semibold mb-2">Product Title 1</h3>
          <p class="text-gray-700">$49.99</p>
          <p class="text-yellow-500">★★★★☆</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
          <h3 class="text-lg font-semibold mb-2">Product Title 2</h3>
          <p class="text-gray-700">$79.99</p>
          <p class="text-yellow-500">★★★★★</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
          <h3 class="text-lg font-semibold mb-2">Product Title 3</h3>
          <p class="text-gray-700">$29.99</p>
          <p class="text-yellow-500">★★★☆☆</p>
        </div>
        <!-- Add more result cards as needed -->
      </div>
    </div>
  </div>

  <script>
    // memastikan bahwa panel filter muncul saat tombol filter ditekan dan disembunyikan saat tombol close ditekan
    document.getElementById('filterToggleBtn').addEventListener('click', function() {
      document.getElementById('filterPanel').style.display = 'block';
    });

    document.getElementById('filterCloseBtn').addEventListener('click', function() {
      document.getElementById('filterPanel').style.display = 'none';
    });

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
  </script>

</body>
</html>
