@extends('layouts.app')

@section('content')
<div class="mx-10 my-10">
    <div class="grid grid-cols-2 gap-6">
        <!-- Data Table -->
        <div class="bg-lime-200 p-4 rounded-lg">
            <h2 class="text-lg font-bold text-center underline underline-offset-8">Tabel Data</h2>
            <div class="mt-4">
                <label class="text-center">Kategori:</label>
                <select id="data-category" class="mx-auto bg-white border border-gray-300 p-1 rounded-lg">
                    <option value="" disabled selected class="placeholder-option">Pilih Kategori</option>
                    <option value="Umur">Umur</option>
                    <option value="Pendidikan Kepala Keluarga">Pendidikan Kepala Keluarga</option>
                    <option value="Pekerjaan">Pekerjaan</option>
                    <option value="Status Perkawinan">Status Perkawinan</option>
                </select>
            </div>
            <table id="dataTable" class="mt-4 w-full border-collapse border border-gray-400">
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
        <div class="bg-lime-200 p-4 rounded-lg">
            <h2 class="text-lg font-bold text-center underline underline-offset-8">Grafik</h2>
            <div class="mt-4">
                <label class="text-center">Kategori:</label>
                <select id="chart-category" class="mx-auto bg-white border border-gray-300 p-1 rounded-lg" onchange="updateChart()">
                    <option value="Keseluruhan">Keseluruhan</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
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
document.getElementById('data-category').addEventListener('change', function() {
    redirectToCategory();
});


function redirectToCategory() {
    var selectElement = document.getElementById("data-category");
    var selectedIndex = selectElement.selectedIndex;
    var selectedValue = selectElement.value;
    var selectedText = selectElement.options[selectedIndex].text;

    // Update the placeholder option with the selected text
    selectElement.options[0].text = selectedText;
    selectElement.options[0].value = selectedValue;

    // Redirect to the appropriate URL
    if (selectedValue === "Umur") {
        window.location.href = '/data_desa_umur';
    } else if (selectedValue === "Pendidikan Kepala Keluarga") {
        window.location.href = '/data_desa_pendidikan_KK';
    } else if (selectedValue === "Pekerjaan") {
        window.location.href = '/data_desa_pekerjaan';
    } else if (selectedValue === "Status Perkawinan") {
        window.location.href = '/data_desa_status_kawin';
    }

    // Reset the selected index to the placeholder
    selectElement.selectedIndex = 0;
}

document.getElementById('chart-category').addEventListener('change', function() {
    updateChart();
});

function updateChart() {
    const selectedCategory = document.getElementById('chart-category').value;
    let url;

    switch (selectedCategory) {
        case 'Keseluruhan':
            url = '/keseluruhan'; // Replace with your actual route
            break;
        case 'Laki-laki':
            url = '/laki-laki'; // Replace with your actual route
            break;
        case 'Perempuan':
            url = '/perempuan'; // Replace with your actual route
            break;
        default:
            url = '/';
    }

    window.location.href = url;
}

// Update the chart on page load
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
            datasets: [{
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
