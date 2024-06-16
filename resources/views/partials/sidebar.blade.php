<aside class="w-1/4 p-4 bg-white shadow-md hidden md:block">
    <div class="mb-4">
        <h2 class="text-xl font-inter font-bold mb-2">Profil</h2>
        <ul class="space-y-2">
            <li><a href="{{ route('profil') }}" class="{{$menu_sidebar=='Profil Umum'? 'border-l border-l-darkgreen border-r border-r-darkgreen':''}} font-inter block p-2 hover:bg-green hover:bg-opacity-30 rounded">Profil Umum</a></li>
            <li><a href="{{ route('visi_misi') }}" class="{{$menu_sidebar=='Visi Misi'? 'border-l border-l-darkgreen border-r border-r-darkgreen':''}} font-inter block p-2 hover:bg-green hover:bg-opacity-30 rounded">Visi Misi</a></li>
            <li><a href="{{ route('profil_pemerintahan') }}" class="{{$menu_sidebar=='Profil Pemerintahan'? 'border-l border-l-darkgreen border-r border-r-darkgreen':''}} font-inter block p-2 hover:bg-green hover:bg-opacity-30 rounded">Profil Pemerintahan</a></li>
            <li><a href="{{ route('profil_kelembagaan') }}" class="{{$menu_sidebar=='Profil Kelembagaan'? 'border-l border-l-darkgreen border-r border-r-darkgreen':''}} font-inter block p-2 hover:bg-green hover:bg-opacity-30 rounded">Profil Kelembagaan</a></li>
        </ul>
    </div>
    <div>
        <h2 class="text-xl font-inter font-bold mb-2">Fasilitas</h2>
        <ul class="space-y-2">
            <li><a href="{{ route('dukcapil_online') }}" class="{{$menu_sidebar=='Dukcapil Online'? 'border-l border-l-darkgreen border-r border-r-darkgreen':''}} font-inter block p-2 hover:bg-green hover:bg-opacity-30 rounded">Dukcapil Online</a></li>
            <li><a href="{{ route('fasilitas_pendidikan') }}" class="{{$menu_sidebar=='Fasilitas Pendidikan'? 'border-l border-l-darkgreen border-r border-r-darkgreen':''}} font-inter block p-2 hover:bg-green hover:bg-opacity-30 rounded">Fasilitas Pendidikan</a></li>
            <li><a href="{{ route('fasilitas_kesehatan') }}" class="{{$menu_sidebar=='Fasilitas Kesehatan'? 'border-l border-l-darkgreen border-r border-r-darkgreen':''}} font-inter block p-2 hover:bg-green hover:bg-opacity-30 rounded">Fasilitas Kesehatan</a></li>
        </ul>
    </div>
</aside>