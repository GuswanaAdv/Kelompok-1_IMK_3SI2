@extends('layouts.app')

@section('content')
<div class="mx-10 my-10 mt-0">
    <div class="grid grid-cols-2 gap-6">
      <!-- Data Table -->
      <div class="bg-lime-200 p-4 rounded-lg">
        <h2 class="text-lg font-bold text-center underline underline-offset-8">Tabel Data</h2>
        <div class="mt-4">
          <label class="text-center">Kategori:</label>
          <select id="data-category" class="mx-auto bg-white border border-gray-300 p-1 rounded-lg" onchange="updateChartFromTable()">
            <option>Umur</option>
            <option>Pendidikan Kepala Keluarga</option>
            <option>Pekerjaan</option>
            <option>Status Perkawinan</option>
          </select>
        </div>
      </div>

      <!-- Chart -->
      <div class="bg-lime-200 p-4 rounded-lg">
        <h2 class="text-lg font-bold text-center underline underline-offset-8">Grafik</h2>
        <div class="mt-4">
          <label class="text-center">Kategori:</label>
          <select id="data-category" class="mx-auto bg-white border border-gray-300 p-1 rounded-lg" onchange="updateChartFromTable()">
            <option>Keseluruhan</option>
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select>
        </div>
      </div>
    </div>
</div>

<!-- Chart.js>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
function updateChartFromTable() {
  const table = document.getElementById('dataTable');
  const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
  const categories = [];
  const maleData = [];
  const femaleData = [];

  for (let i = 0; i < rows.length; i++) {
    const cells = rows[i].getElementsByTagName('td');
    categories.push(cells[0].innerText);
    maleData.push(parseInt(cells[1].innerText));
    femaleData.push(parseInt(cells[2].innerText));
  }

  const ctx = document.getElementById('chart').getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: categories,
      datasets: [
        {
          label: 'Laki-laki',
          data: maleData,
          backgroundColor: 'rgba(54, 162, 235, 0.2)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        },
        {
          label: 'Perempuan',
          data: femaleData,
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
        }
      ]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
}

// Update the chart on page load
updateChartFromTable();
</script -->
@endsection
