@extends('layouts.app')

@section('content')
<div class="mx-10 my-10 mt-0">
    <div class="grid grid-cols-2 gap-6">
      <!-- Data Table -->
      <div class="bg-lime-200 p-4 rounded-lg">
        <h2 class="text-lg font-bold text-center underline underline-offset-8">Tabel Data</h2>
        <div class="mt-4">
          <label class="text-center">Kategori:</label>
          <select id="data-category" class="mx-auto bg-white border border-gray-300 p-1 rounded-lg" onchange="redirectToCategory()">
            <option>Umur</option>
            <option>Pendidikan Kepala Keluarga</option>
            <option {{ $kategori==='pekerjaan'? 'selected' : ''}}>Pekerjaan</option>
            <option>Status Perkawinan</option>
          </select>
        </div>
        <table id="dataTable" class="mt-1 w-full border-collapse border border-gray-400">
          <thead>
            <tr>
              <th class="border border-gray-300 px-2 py-2" rowspan="2">No.</th>
              <th class="border border-gray-300 px-2 py-2" rowspan="2">Jenis Pekerjaan</th>
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
              <td class="border border-gray-300 px-2 py-2">Tidak/ Belum Bekerja</td>
              <td class="border border-gray-300 px-2 py-2">195</td>
              <td class="border border-gray-300 px-2 py-2">199</td>
              <td class="border border-gray-300 px-2 py-2">394</td>
            </tr>
            <tr>
              <th class="border border-gray-300 px-2 py-2">2</th>
              <td class="border border-gray-300 px-2 py-2">Pelajar/ Mahasiswa</td>
              <td class="border border-gray-300 px-2 py-2">304</td>
              <td class="border border-gray-300 px-2 py-2">279</td>
              <td class="border border-gray-300 px-2 py-2">583</td>
            </tr>
            <tr>
              <th class="border border-gray-300 px-2 py-2">3</th>
              <td class="border border-gray-300 px-2 py-2">PNS/TNI/ POLRI</td>
              <td class="border border-gray-300 px-2 py-2">69</td>
              <td class="border border-gray-300 px-2 py-2">71</td>
              <td class="border border-gray-300 px-2 py-2">140</td>
            </tr>
            <tr>
              <th class="border border-gray-300 px-2 py-2">4</th>
              <td class="border border-gray-300 px-2 py-2">Perdagangan/ Pedagang</td>
              <td class="border border-gray-300 px-2 py-2">80</td>
              <td class="border border-gray-300 px-2 py-2">114</td>
              <td class="border border-gray-300 px-2 py-2">194</td>
            </tr>
            <tr>
              <th class="border border-gray-300 px-2 py-2">5</th>
              <td class="border border-gray-300 px-2 py-2">Karyawan</td>
              <td class="border border-gray-300 px-2 py-2">505</td>
              <td class="border border-gray-300 px-2 py-2">264</td>
              <td class="border border-gray-300 px-2 py-2">769</td>
            </tr>
            <tr>
              <th class="border border-gray-300 px-2 py-2">6</th>
              <td class="border border-gray-300 px-2 py-2">Buruh</td>
              <td class="border border-gray-300 px-2 py-2">838</td>
              <td class="border border-gray-300 px-2 py-2">282</td>
              <td class="border border-gray-300 px-2 py-2">1120</td>
            </tr>
            <tr>
              <th class="border border-gray-300 px-2 py-2">7</th>
              <td class="border border-gray-300 px-2 py-2">Wiraswasta</td>
              <td class="border border-gray-300 px-2 py-2">86</td>
              <td class="border border-gray-300 px-2 py-2">41</td>
              <td class="border border-gray-300 px-2 py-2">127</td>
            </tr>
            <tr>
              <th class="border border-gray-300 px-2 py-2">8</th>
              <td class="border border-gray-300 px-2 py-2">Lainnya</td>
              <td class="border border-gray-300 px-2 py-2">108</td>
              <td class="border border-gray-300 px-2 py-2">35</td>
              <td class="border border-gray-300 px-2 py-2">143</td>
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
</script>
@endsection
