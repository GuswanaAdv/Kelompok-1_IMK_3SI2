@extends('layouts.app')
@section('content')
    <style>
        body{
            background-color:white;
        }
        .text-center {
            text-align: center;
        }
        #map {
            width: 1200px;
            height: 400px;
    background-color: lightblue;
    border: 2px solid white; 
        }
        h1 {
        color: white;
    }
    </style>
    <link rel='stylesheet' href='https://unpkg.com/leaflet@1.8.0/dist/leaflet.css' crossorigin='' />

<div class="container mx-auto mt-0 flex ">
    <!-- Sidebar -->
    @include('partials.sidebar')
    
    <!-- Main Content -->
    <main class="md:w-3/4 md:ml-4 p-4 bg-white shadow-md">
        <h2 class="bg-darkgreen text-white py-2 rounded text-center text-2xl font-bold mb-4 fade-down">Profil Umum</h2>
        <div class="mb-4">
            <h3 class="mb-4 ml-4 font-roboto font-bold fade-in">Wilayah Administratif:</h3>
            <ul class="list-disc list-inside ml-4">
                <li class="mb-4 ml-4 font-roboto fade-up">Kec. Sempor, Kab. Kebumen, Jawa Tengah, Kode Desa: 3305182004</li>
            </ul>
        </div>

        <div class="mb-4 border-t pt-4">
            <h3 class="mb-4 ml-4 font-roboto font-bold fade-left">Rincian Wilayah</h3>
            <ul class="list-disc list-inside ml-4">
                <li class="mb-4 ml-4 font-roboto fade-right">Luas Wilayah: 224 Hektar</li>
                <li class="mb-4 ml-4 font-roboto fade-left">Bujur: 109.4999611</li>
                <li class="mb-4 ml-4 font-roboto fade-right">Lintang: -7.578013</li>
            </ul>
        </div>

        {{-- Map --}}
        <div class="mb-4 fade-up"> 
            <div class="max-w-7xl mx-auto p-6 lg:p-8 rounded-full">
                <div id='map' class='rounded' style='width: 100%;'></div>
                <script src='https://unpkg.com/leaflet@1.8.0/dist/leaflet.js' crossorigin=''></script>
                <script>
                    let map, markers = [];
                    /* ----------------------------- Initialize Map ----------------------------- */
                    function initMap() {
                        map = L.map('map', {
                            center: {
                                lat: -7.7925927,
                                lng: 110.3658812,
                            },
                            zoom: 13
                        });
            
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                            attribution: 'Â© OpenStreetMap'
                        }).addTo(map);
            
                        map.on('click', mapClicked);
                        initMarkers();
                    }
                    initMap();
            
                    /* --------------------------- Initialize Markers --------------------------- */
                    function initMarkers() {
                        const initialMarkers = <?php echo json_encode($initialMarkers); ?>;
            
                        for (let index = 0; index < initialMarkers.length; index++) {
            
                            const data = initialMarkers[index];
                            const marker = generateMarker(data, index);
                            marker.addTo(map).bindPopup(`<b>${data.position.lat},  ${data.position.lng}</b>`);
                            map.panTo(data.position);
                            markers.push(marker)
                        }
                    }
            
                    function generateMarker(data, index) {
                        return L.marker(data.position, {
                                draggable: data.draggable
                            })
                            .on('click', (event) => markerClicked(event, index))
                            .on('dragend', (event) => markerDragEnd(event, index));
                    }
            
                    /* ------------------------- Handle Map Click Event ------------------------- */
                    function mapClicked($event) {
                        console.log(map);
                        console.log($event.latlng.lat, $event.latlng.lng);
                    }
            
                    /* ------------------------ Handle Marker Click Event ----------------------- */
                    function markerClicked($event, index) {
                        console.log(map);
                        console.log($event.latlng.lat, $event.latlng.lng);
                    }
            
                    /* ----------------------- Handle Marker DragEnd Event ---------------------- */
                    function markerDragEnd($event, index) {
                        console.log(map);
                        console.log($event.target.getLatLng());
                    }
                </script>
            </div>
        </div>
    </main>
</div>

<script>
    gsap.utils.toArray('img').forEach(img => {
        gsap.fromTo(img, {
          opacity: 0,
      },{
          opacity: 1,
          duration: 3,
          delay: 0.5,
          scrollTrigger:img
      });
    })
</script>
@endsection 