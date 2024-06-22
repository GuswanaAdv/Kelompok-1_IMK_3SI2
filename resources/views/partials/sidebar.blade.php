<aside class="w-1/4 p-4 bg-white shadow-md hidden md:block">
    <div class="mb-4">
        <h2 class="text-xl font-inter font-bold mb-2 fade-left">Profil</h2>
        <ul class="space-y-2">
            <li class="fade-right"><a href="{{ route('profil') }}" class="{{$menu_sidebar=='Profil Umum'? 'border-l border-l-darkgreen border-r border-r-darkgreen':''}} font-inter block p-2 hover:bg-green hover:bg-opacity-30 rounded">Profil Umum</a></li>
            <li class="fade-left"><a href="{{ route('visi_misi') }}" class="{{$menu_sidebar=='Visi Misi'? 'border-l border-l-darkgreen border-r border-r-darkgreen':''}} font-inter block p-2 hover:bg-green hover:bg-opacity-30 rounded">Visi Misi</a></li>
            <li class="fade-right"><a href="{{ route('profil_pemerintahan') }}" class="{{$menu_sidebar=='Pemerintahan'? 'border-l border-l-darkgreen border-r border-r-darkgreen':''}} font-inter block p-2 hover:bg-green hover:bg-opacity-30 rounded">Profil Pemerintahan</a></li>
            <li class="fade-left"><a href="{{ route('profil_kelembagaan') }}" class="{{$menu_sidebar=='Kelembagaan'? 'border-l border-l-darkgreen border-r border-r-darkgreen':''}} font-inter block p-2 hover:bg-green hover:bg-opacity-30 rounded">Profil Kelembagaan</a></li>
        </ul>
    </div>
    <div>
        <h2 class="text-xl font-inter font-bold mb-2 fade-rigth">Fasilitas</h2>
        <ul class="space-y-2">
            <li class="fade-left"><a href="{{ route('dukcapil_online') }}" class="{{$menu_sidebar=='Dukcapil'? 'border-l border-l-darkgreen border-r border-r-darkgreen':''}} font-inter block p-2 hover:bg-green hover:bg-opacity-30 rounded">Dukcapil Online</a></li>
            <li class="fade-right"><a href="{{ route('fasilitas_pendidikan') }}" class="{{$menu_sidebar=='Pendidikan'? 'border-l border-l-darkgreen border-r border-r-darkgreen':''}} font-inter block p-2 hover:bg-green hover:bg-opacity-30 rounded">Fasilitas Pendidikan</a></li>
            <li class="fade-left"><a href="{{ route('fasilitas_kesehatan') }}" class="{{$menu_sidebar=='Kesehatan'? 'border-l border-l-darkgreen border-r border-r-darkgreen':''}} font-inter block p-2 hover:bg-green hover:bg-opacity-30 rounded">Fasilitas Kesehatan</a></li>
        </ul>
    </div>
</aside>