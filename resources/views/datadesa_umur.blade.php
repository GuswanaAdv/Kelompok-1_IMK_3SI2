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
                    <option {{$kategori=='umur'? 'selected' : ''}}>Umur</option>
                    <option>Pendidikan Kepala Keluarga</option>
                    <option>Pekerjaan</option>
                    <option>Status Perkawinan</option>
                </select>
            </div>
            <table id="dataTable" class="mt-1 w-full border-collapse border border-gray-400">
                <thead>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2" rowspan="2">No.</th>
                        <th class="border border-gray-300 px-2 py-2" rowspan="2">Kelompok Umur</th>
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
                        <td class="border border-gray-300 px-2 py-2">5 - 9 tahun</td>
                        <td class="border border-gray-300 px-2 py-2">125</td>
                        <td class="border border-gray-300 px-2 py-2">117</td>
                        <td class="border border-gray-300 px-2 py-2">242</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">2</th>
                        <td class="border border-gray-300 px-2 py-2">10 - 14 tahun</td>
                        <td class="border border-gray-300 px-2 py-2">214</td>
                        <td class="border border-gray-300 px-2 py-2">187</td>
                        <td class="border border-gray-300 px-2 py-2">401</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">3</th>
                        <td class="border border-gray-300 px-2 py-2">15 - 19 tahun</td>
                        <td class="border border-gray-300 px-2 py-2">183</td>
                        <td class="border border-gray-300 px-2 py-2">206</td>
                        <td class="border border-gray-300 px-2 py-2">389</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">4</th>
                        <td class="border border-gray-300 px-2 py-2">20 - 24 tahun</td>
                        <td class="border border-gray-300 px-2 py-2">205</td>
                        <td class="border border-gray-300 px-2 py-2">195</td>
                        <td class="border border-gray-300 px-2 py-2">400</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">5</th>
                        <td class="border border-gray-300 px-2 py-2">25 - 29 tahun</td>
                        <td class="border border-gray-300 px-2 py-2">206</td>
                        <td class="border border-gray-300 px-2 py-2">211</td>
                        <td class="border border-gray-300 px-2 py-2">417</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">6</th>
                        <td class="border border-gray-300 px-2 py-2">30 - 34 tahun</td>
                        <td class="border border-gray-300 px-2 py-2">262</td>
                        <td class="border border-gray-300 px-2 py-2">205</td>
                        <td class="border border-gray-300 px-2 py-2">467</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">7</th>
                        <td class="border border-gray-300 px-2 py-2">35 - 39 tahun</td>
                        <td class="border border-gray-300 px-2 py-2">202</td>
                        <td class="border border-gray-300 px-2 py-2">202</td>
                        <td class="border border-gray-300 px-2 py-2">404</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">8</th>
                        <td class="border border-gray-300 px-2 py-2">40 - 44 tahun</td>
                        <td class="border border-gray-300 px-2 py-2">227</td>
                        <td class="border border-gray-300 px-2 py-2">182</td>
                        <td class="border border-gray-300 px-2 py-2">409</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">9</th>
                        <td class="border border-gray-300 px-2 py-2">45 - 49 tahun</td>
                        <td class="border border-gray-300 px-2 py-2">192</td>
                        <td class="border border-gray-300 px-2 py-2">193</td>
                        <td class="border border-gray-300 px-2 py-2">385</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">10</th>
                        <td class="border border-gray-300 px-2 py-2">50 - 54 tahun</td>
                        <td class="border border-gray-300 px-2 py-2">184</td>
                        <td class="border border-gray-300 px-2 py-2">173</td>
                        <td class="border border-gray-300 px-2 py-2">357</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">11</th>
                        <td class="border border-gray-300 px-2 py-2">55 - 59 tahun</td>
                        <td class="border border-gray-300 px-2 py-2">156</td>
                        <td class="border border-gray-300 px-2 py-2">203</td>
                        <td class="border border-gray-300 px-2 py-2">359</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">12</th>
                        <td class="border border-gray-300 px-2 py-2">60 - 64 tahun</td>
                        <td class="border border-gray-300 px-2 py-2">166</td>
                        <td class="border border-gray-300 px-2 py-2">165</td>
                        <td class="border border-gray-300 px-2 py-2">331</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">13</th>
                        <td class="border border-gray-300 px-2 py-2">65 - 69 tahun</td>
                        <td class="border border-gray-300 px-2 py-2">117</td>
                        <td class="border border-gray-300 px-2 py-2">133</td>
                        <td class="border border-gray-300 px-2 py-2">250</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">14</th>
                        <td class="border border-gray-300 px-2 py-2">70 - 74 tahun</td>
                        <td class="border border-gray-300 px-2 py-2">79</td>
                        <td class="border border-gray-300 px-2 py-2">174</td>
                        <td class="border border-gray-300 px-2 py-2">253</td>
                    </tr>
                    <tr>
                        <th class="border border-gray-300 px-2 py-2">15</th>
                        <td class="border border-gray-300 px-2 py-2">≥75 tahun</td>
                        <td class="border border-gray-300 px-2 py-2">129</td>
                        <td class="border border-gray-300 px-2 py-2">148</td>
                        <td class="border border-gray-300 px-2 py-2">277</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Chart -->
        <div class="bg-lime-200 p-4 rounded-lg">
            <h2 class="text-lg font-bold text-center underline underline-offset-8">Grafik</h2>
            <div class="mt-4">
                <label class="text-center">Kategori:</label>
                <select id="chart-category" class="mx-auto bg-white border border-gray-300 p-1 rounded-lg" onchange="updateChartFromTable()">
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
    const femaleData2 = [];

    for (let i = 0; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName('td');
        categories.push(cells[0].innerText);
        maleData.push(parseInt(cells[1].innerText));
        femaleData.push(parseInt(cells[2].innerText) * -1);
        femaleData2.push(parseInt(cells[2].innerText));
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
            responsive: true,
            maintainAspectRatio: true,
            indexAxis: 'y',
            scales: {
                x: {
                    beginAtZero: true,
                    stacked: true,
                    ticks: {
                        callback: function(value) {
                            return Math.abs(value);
                        }
                    }
                },
                y: {
                    stacked: true
                }
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            const label = context.dataset.label || '';
                            const value = Math.abs(context.raw);
                            return `${label}: ${value}`;
                        }
                    }
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
                    data: femaleData2,
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
