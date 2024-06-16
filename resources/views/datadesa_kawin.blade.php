@extends('layouts.app')

@section('main-class', 'px-4 sm:px-10')

@section('content')
<style>
    body{
        background-color:white;
    }
</style>

<div class="mx-0 sm:mx-10 my-10 mt-0">
    <div class="grid md:grid-cols-2 gap-6">
        <!-- Data Table -->
        <div class="bg-white shadow-lg p-4 rounded-lg">
            <h2 class="text-sm sm:text-lg font-bold text-center underline underline-offset-8">Tabel Data</h2>
            <div class="mt-4">
                <label class="text-sm sm:text-base text-center">Kategori:</label>
                <select id="data-category" class="text-sm sm:text-base mx-auto bg-white border border-gray-300 p-1 rounded-lg" onchange="redirectToCategory()">
                    <option>Umur</option>
                    <option>Pendidikan Kepala Keluarga</option>
                    <option>Pekerjaan</option>
                    <option {{ $kategori=='status_kawin'? 'selected' : ''}}>Status Perkawinan</option>
                </select>
            </div>
            <table id="dataTable" class="text-xs sm:text-base mt-4 w-full border-collapse border border-gray-400">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2" rowspan="2">No.</th>
                        <th class="border border-gray-300 px-2 py-2" rowspan="2">Status Perkawinan</th>
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
                        <td class="border border-gray-300 px-2 py-2">Belum Kawin</td>
                        <td class="border border-gray-300 px-2 py-2">1259</td>
                        <td class="border border-gray-300 px-2 py-2">995</td>
                        <td class="border border-gray-300 px-2 py-2">2254</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">2</th>
                        <td class="border border-gray-300 px-2 py-2">Kawin Tercatat</td>
                        <td class="border border-gray-300 px-2 py-2">1306</td>
                        <td class="border border-gray-300 px-2 py-2">1295</td>
                        <td class="border border-gray-300 px-2 py-2">2601</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">3</th>
                        <td class="border border-gray-300 px-2 py-2">Kawin Belum Tercatat</td>
                        <td class="border border-gray-300 px-2 py-2">39</td>
                        <td class="border border-gray-300 px-2 py-2">67</td>
                        <td class="border border-gray-300 px-2 py-2">106</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">4</th>
                        <td class="border border-gray-300 px-2 py-2">Cerai Hidup Tercatat</td>
                        <td class="border border-gray-300 px-2 py-2">57</td>
                        <td class="border border-gray-300 px-2 py-2">242</td>
                        <td class="border border-gray-300 px-2 py-2">299</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Chart -->
        <div class="bg-white shadow-lg p-4 rounded-lg">
            <h2 class="text-sm sm:text-lg font-bold text-center underline underline-offset-8">Grafik</h2>
            <div class="mt-4">
                <label class="text-sm sm:text-base text-center">Kategori:</label>
                <select id="chart-category" class="text-sm sm:text-base mx-auto bg-white border border-gray-300 p-1 rounded-lg" onchange="updateChartFromTable()">
                    <option value="Keseluruhan">Keseluruhan</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="mt-4">
                <div class="chart-container" style="position: relative; width: 100%; height: 0; padding-top: 56.25%;">
                    <canvas id="chartAll" style="position: absolute; top: 0; left: 0; width: 100%; height: 0;"></canvas>
                    <canvas id="chartMen" style="position: absolute; top: 0; left: 0; width: 100%; height: 0;"></canvas>
                    <canvas id="chartFem" style="position: absolute; top: 0; left: 0; width: 100%; height: 0;"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
// Event listener for table category
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

// Event listener for chart category
function updateChartFromTable() {
    const table = document.getElementById('dataTable');
    const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    const selectedCategory = document.getElementById('chart-category').value;
    const categories = [];
    const maleData = [];
    const femaleData = [];

    for (let i = 0; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName('td');
        categories.push(cells[0].innerText);
        maleData.push(parseInt(cells[1].innerText));
        femaleData.push(parseInt(cells[2].innerText));
    }

    // Ensure previous charts are destroyed
    if (window.allChart) window.allChart.destroy();
    if (window.menChart) window.menChart.destroy();
    if (window.femChart) window.femChart.destroy();

    const ctxAll = document.getElementById('chartAll').getContext('2d');
    const ctxMen = document.getElementById('chartMen').getContext('2d');
    const ctxFem = document.getElementById('chartFem').getContext('2d');

    document.getElementById('chartAll').style.display = selectedCategory === 'Keseluruhan' ? 'block' : 'none';
    document.getElementById('chartMen').style.display = selectedCategory === 'Laki-laki' ? 'block' : 'none';
    document.getElementById('chartFem').style.display = selectedCategory === 'Perempuan' ? 'block' : 'none';

    window.allChart = new Chart(ctxAll, {
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

    window.menChart = new Chart(ctxMen, {
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

    window.femChart = new Chart(ctxFem, {
        type: 'bar',
        data: {
            labels: categories,
            datasets: [
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

// Call the function to update the charts initially
updateChartFromTable();
</script>
@endsection
