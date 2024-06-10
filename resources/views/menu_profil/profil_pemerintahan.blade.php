@extends('layouts.app')
@section('content')
<div class="container mx-auto mt-4 flex">
    <!-- Sidebar -->
    @include('partials.sidebar')
    
    <!-- Main Content -->
    <main class="w-3/4 p-4 bg-white shadow-md ml-4">
        <h2 class="bg-darkgreen text-white py-2 rounded text-center text-2xl font-bold mb-4">Profil Pemerintahan</h2>
        <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-4">
                <h2 class="text-center mb-4">Kepala Desa</h2>
                <div class="flex flex-col items-center gap-y-1">
                    <div><img src="http://localhost:8000/img/foto_profil.jpg" width="180"></div>
                    <div>
                        <p class="text-center">Kepala Desa</p>
                        <p class="text-center">Sunaryo</p>
                    </div>
                </div>
            </div>

            <div class="mx-auto max-w-2xl border-t px-4 py-4">
                <h2 class="text-center mb-4">Sekretaris Desa</h2>
                <div class="flex flex-col items-center gap-y-1">
                    <div><img src="http://localhost:8000/img/foto_profil.jpg" width="180"></div>
                    <div>
                        <p class="text-center">Sekretaris Desa</p>
                        <p class="text-center">Sugianto, SE</p>
                    </div>
                </div>
            </div>

            <div class="mx-auto max-w-2xl border-t px-4 py-4">
                <h2 class="text-center mb-4">Kepala Seksi Desa</h2>
                <div class="grid grid-cols-3 gap-x-6 gap-y-10">
                    <div class="flex flex-col items-center gap-y-1">
                    <div><img src="http://localhost:8000/img/foto_profil.jpg" width="180"></div>
                        <div>
                            <p class="text-center">Kepala Seksi Pemerintahan</p>
                            <p class="text-center">Ike Krisbianti, S.Sos</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-1">
                        <div><img src="http://localhost:8000/img/foto_profil.jpg" width="180"></div>
                        <div>
                            <p class="text-center">Kepala Seksi Kesejahteraan</p>
                            <p class="text-center">Purwanto</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-1">
                        <div><img src="http://localhost:8000/img/foto_profil.jpg" width="180"></div>
                        <div>
                            <p class="text-center">Kepala Seksi Pelayanan</p>
                            <p class="text-center">Kusdi Ferlina</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-auto max-w-2xl border-t px-4 py-4">
                <h2 class="text-center mb-4">Kepala Urusan Desa</h2>
                <div class="grid grid-cols-3 gap-x-6 gap-y-10">
                    <div class="flex flex-col items-center gap-y-1">
                        <div><img src="http://localhost:8000/img/foto_profil.jpg" width="180"></div>
                        <div>
                            <p class="text-center">Kepala Urusan Keuangan</p>
                            <p class="text-center">Marsudi</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-1">
                        <div><img src="http://localhost:8000/img/foto_profil.jpg" width="180"></div>
                        <div>
                            <p class="text-center">Kepala Urusan Tata Usaha dan Umum</p>
                            <p class="text-center">Yuni Iriyanti, S.Pd</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-1">
                        <div><img src="http://localhost:8000/img/foto_profil.jpg" width="180"></div>
                        <div>
                            <p class="text-center">Kepala Urusan Perencanaan</p>
                            <p class="text-center">Muhajir Wardani, SE</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mx-auto max-w-2xl border-t px-4 py-4">
                <h2 class="text-center mb-4">Kepala Dusun</h2>
                <div class="grid grid-cols-3 gap-x-6 gap-y-10">
                    <div class="flex flex-col items-center gap-y-1">
                        <div><img src="http://localhost:8000/img/foto_profil.jpg" width="180"></div>
                        <div>
                            <p class="text-center">Kepala Dusun 1</p>
                            <p class="text-center">Suswadi</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-1">
                        <div><img src="http://localhost:8000/img/foto_profil.jpg" width="180"></div>
                        <div>
                            <p class="text-center">Kepala Dusun 2</p>
                            <p class="text-center">Purwito</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-1">
                        <div><img src="http://localhost:8000/img/foto_profil.jpg" width="180"></div>
                        <div>
                            <p class="text-center">Kepala Dusun 3</p>
                            <p class="text-center">Wahidin</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
@endsection 