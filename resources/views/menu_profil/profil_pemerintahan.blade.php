@extends('layouts.app')
@section('content')
<style>
    body {
        background-color: white;
    }
</style>

<div class="container mx-auto mt-0 flex">
    <!-- Sidebar -->
    @include('partials.sidebar')

    <!-- Main Content -->
    <main class="md:w-3/4 ml-0 md:ml-4 sm:px-6 lg:px-8 sm:p-4 bg-white text-xs sm:text-base shadow-md">
        <h2 class="bg-darkgreen text-white py-2 rounded text-center text-2xl font-bold mb-4">Profil Pemerintahan</h2>
        <div class="bg-white">
            <div class="mx-auto max-w-2xl px-4 py-4">
                <h2 class="text-center mb-4">Kepala Desa</h2>
                <div class="flex flex-col items-center gap-y-1">
                    <div><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/Bupati_Kebumen_Arif_Sugiyanto.jpg/220px-Bupati_Kebumen_Arif_Sugiyanto.jpg" width="100"></div>
                    <div>
                        <p class="text-center">Kepala Desa</p>
                        <p class="text-center">Sunaryo</p>
                    </div>
                </div>
            </div>

            <div class="mx-auto max-w-2xl border-t px-4 py-4">
                <h2 class="text-center mb-4">Sekretaris Desa</h2>
                <div class="flex flex-col items-center gap-y-1">
                    <div><img src="https://upload.wikimedia.org/wikipedia/id/b/b2/Yahya.jpg" width="100"></div>
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
                    <div><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ed/Wakil_Bupati_Kebumen_Ristawati_Purwaningsih.jpg/220px-Wakil_Bupati_Kebumen_Ristawati_Purwaningsih.jpg" width="100px"></div>
                        <div>
                            <p class="text-center">Kepala Seksi Pemerintahan</p>
                            <p class="text-center">Ike Krisbianti, S.Sos</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-1">
                        <div><img src="https://old.cirebonkab.go.id/wp-content/uploads/2020/06/Bupati-Cirebon-2019-OK-1-683x1024.jpg" width="100"></div>
                        <div>
                            <p class="text-center">Kepala Seksi Kesejahteraan</p>
                            <p class="text-center">Purwanto</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-1">
                        <div><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Wahyu_Mijaya_Pj_Bupati_Cirebon.jpg/200px-Wahyu_Mijaya_Pj_Bupati_Cirebon.jpg" width="100"></div>
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
                        <div><img src="https://upload.wikimedia.org/wikipedia/commons/c/c2/Budhi_Sarwono.jpg" width="100"></div>
                        <div>
                            <p class="text-center">Kepala Urusan Keuangan</p>
                            <p class="text-center">Marsudi</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-1">
                        <div><img src="https://upload.wikimedia.org/wikipedia/id/7/7d/Wahyu_Tjiptaningsih_Wabup_Cirebon.jpg" width="100"></div>
                        <div>
                            <p class="text-center">Kepala Urusan Tata Usaha dan Umum</p>
                            <p class="text-center">Yuni Iriyanti, S.Pd</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-1">
                        <div><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxEyt0qORg3mKsSh8gPQacBRiXHD2-10C67A&s" width="100"></div>
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
                        <div><img src="https://disipusda.purwakartakab.go.id/wp-content/uploads/2023/09/WakilBupati-02-Drs.-H.-DUDUNG-B-SUPARDI-MM.jpg" width="100"></div>
                        <div>
                            <p class="text-center">Kepala Dusun 1</p>
                            <p class="text-center">Suswadi</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-1">
                        <div><img src="https://disipusda.purwakartakab.go.id/wp-content/uploads/2023/09/Bupati-Purwakarta-08-H.-Dedi-Mulyadi-SH.jpg" width="100"></div>
                        <div>
                            <p class="text-center">Kepala Dusun 2</p>
                            <p class="text-center">Purwito</p>
                        </div>
                    </div>
                    <div class="flex flex-col items-center gap-y-1">
                        <div><img src="https://disipusda.purwakartakab.go.id/wp-content/uploads/2023/09/Wakil-Bupati-04-H.-Aming-1024x1024.jpg" width="100"></div>
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