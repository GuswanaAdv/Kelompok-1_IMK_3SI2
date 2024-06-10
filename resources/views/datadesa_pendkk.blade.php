@extends('layouts.app')

@section('content')
<div class="mx-10 my-10">
    <div class="grid grid-cols-2 gap-6">
      <!-- Data Table -->
      <div class="bg-lime-200 p-4 rounded-lg">
        <h2 class="text-lg font-bold text-center underline underline-offset-8">Tabel Data</h2>
        <div class="mt-4">
          <label class="text-center">Kategori:</label>
          <select id="data-category" class="mx-auto bg-white border border-gray-300 p-1 rounded-lg" onchange="redirectToCategory()">
            <option>Umur</option>
            <option>Pendidikan Kepala Keluarga</option>
            <option>Pekerjaan</option>
            <option>Status Perkawinan</option>
          </select>
        </div>
        <table id="dataTable" class="mt-4 w-full border-collapse border border-gray-400">
          <thead>
            <tr>
              <th class="border border-gray-300 px-2 py-2" rowspan="2">No.</th>
              <th class="border border-gray-300 px-2 py-2" rowspan="2">Pendidikan Terakhir</th>
              <th class="border border-gray-300 px-2 py-2" colspan="2">Jenis Kelamin</th>
              <th class="border border-gray-300 px-2 py-2" rowspan="2">Jumlah</th>
            </tr>
            <tr>
              <th class="border border-gray-300 px-2 py-2">Laki-laki</th>
              <th class="border border-gray-300 px-2 py-2">Perempuan</th>
            </tr>
          </thead>
          <tbody>
            <!-- Add rows as needed -->
            <tr>
              <th class="border border-gray-300 px-2 py-2">1</th>
              <td class="border border-gray-300 px-2 py-2">Tidak Sekolah/Tidak Tamat SD</td>
              <td class="border border-gray-300 px-2 py-2">483</td>
              <td class="border border-gray-300 px-2 py-2">471</td>
              <td class="border border-gray-300 px-2 py-2">954</td>
            </tr>
            <tr>
              <th class="border border-gray-300 px-2 py-2">2</th>
              <td class="border border-gray-300 px-2 py-2">SD/Sederajat</td>
              <td class="border border-gray-300 px-2 py-2">636</td>
              <td class="border border-gray-300 px-2 py-2">790</td>
              <td class="border border-gray-300 px-2 py-2">1426</td>
            </tr>
            <tr>
              <th class="border border-gray-300 px-2 py-2">3</th>
              <td class="border border-gray-300 px-2 py-2">SMP/Sederajat</td>
              <td class="border border-gray-300 px-2 py-2">279</td>
              <td class="border border-gray-300 px-2 py-2">250</td>
              <td class="border border-gray-300 px-2 py-2">529</td>
            </tr>
            <tr>
              <th class="border border-gray-300 px-2 py-2">4</th>
              <td class="border border-gray-300 px-2 py-2">SMA/Sederajat</td>
              <td class="border border-gray-300 px-2 py-2">727</td>
              <td class="border border-gray-300 px-2 py-2">547</td>
              <td class="border border-gray-300 px-2 py-2">1274</td>
            </tr>
            <tr>
              <th class="border border-gray-300 px-2 py-2">5</th>
              <td class="border border-gray-300 px-2 py-2">Akademi/S. Muda/Diploma I/II/III</td>
              <td class="border border-gray-300 px-2 py-2">21</td>
              <td class="border border-gray-300 px-2 py-2">20</td>
              <td class="border border-gray-300 px-2 py-2">417</td>
            </tr>
            <tr>
              <th class="border border-gray-300 px-2 py-2">6</th>
              <td class="border border-gray-300 px-2 py-2">Diploma IV/Strata I/II/III</td>
              <td class="border border-gray-300 px-2 py-2">62</td>
              <td class="border border-gray-300 px-2 py-2">51</td>
              <td class="border border-gray-300 px-2 py-2">113</td>
            </tr>
          </tbody>
        </table>
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
        <div class="mt-4">
          <div class="chart-container" style="position: relative; width: 100%; height: 0; padding-top: 56.25%;">
            <canvas id="chart" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></canvas>
          </div>
        </div>
      </div>
    </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Event listener for select element in table
function redirectToCategory() {
    const category = document.getElementById('data-category').value;
    let url;

    switch (category) {
        case 'Umur':
            url = '/data_desa_umur'; // Replace with your actual route
            break;
        case 'Pendidikan Kepala Keluarga':
            url = '/data_desa_pendidikan_KK'; // Replace with your actual route
            break;
        case 'Pekerjaan':
            url = '/data_desa_pekerjaan'; // Replace with your actual route
            break;
        case 'Status Perkawinan':
            url = '/data_desa_status_kawin'; // Replace with your actual route
            break;
        default:
            url = '/data_desa';
    }

    window.location.href = url;
}

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
      labels: ['Tidak Sekolah', 'SD', 'SMP', 'SMA', 'D1/2/3', 'D4/S1/2/3'],
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
</script>
@endsection
