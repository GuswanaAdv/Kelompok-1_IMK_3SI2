<aside class="w-1/4 p-4 bg-white shadow-md">
    <div class="mb-4">
        <h2 class="text-xl font-inter font-bold mb-2">Profil</h2>
        <ul class="space-y-2">
            <li><a href="{{ route('profil') }}" class="font-inter block p-2 hover:bg-green rounded">Profil Umum</a></li>
            <li><a href="{{ route('visi_misi') }}" class="font-inter block p-2 hover:bg-green rounded">Visi Misi</a></li>
            <li><a href="{{ route('profil_pemerintahan') }}" class="font-inter block p-2 hover:bg-green rounded">Profil Pemerintahan</a></li>
            <li><a href="{{ route('profil_kelembagaan') }}" class="font-inter block p-2 hover:bg-green rounded">Profil Kelembagaan</a></li>
        </ul>
    </div>
    <div>
        <h2 class="text-xl font-inter font-bold mb-2">Fasilitas</h2>
        <ul class="space-y-2">
            <li><a href="{{ route('dukcapil_online') }}" class="font-inter block p-2 hover:bg-green rounded">Dukcapil Online</a></li>
            <li><a href="{{ route('fasilitas_pendidikan') }}" class="font-inter block p-2 hover:bg-green rounded">Fasilitas Pendidikan</a></li>
            <li><a href="{{ route('fasilitas_kesehatan') }}" class="font-inter block p-2 hover:bg-green rounded">Fasilitas Kesehatan</a></li>
        </ul>
    </div>
</aside>