@extends('layouts.app')
@section('content')
<div class="relative pt-24 h-max  lg:bg-white px-4">
    <div class="top-28 right-0 grid lg:grid-cols-2 grid-cols-1">
        <div class="lg:px-4 lg:pt-24 lg:pl-12 lg:text-left text-center w-full">
            <div class="text-4xl lg:text-8xl font-roboto font-extrabold bg-gradient-to-r from-green-900 from-10% via-green-500 via-30% to-green-500 to-90% lg:inline-block text-transparent bg-clip-text">Desa</div>
            <div class="lg:h-32 text-4xl lg:text-8xl font-roboto font-extrabold bg-gradient-to-r from-green-900 from-10% via-green-500 via-30% to-green-500 to-90% lg:inline-block text-transparent bg-clip-text">/Jatinegara/</div>
            <div class="w-full flex justify-center lg:justify-start h-24">
                <div class="pt-8 lg:pt-4 grid grid-cols-2 w-4/5 lg:w-max gap-1 lg:gap-1">
                    <div>
                        <button class="bg-darkgreen rounded-[36px] text-white px-8 lg:px-12 py-1 lg:py-3 lg:mr-4 font-inter outline outline-darkgreen">Cari Data</button>
                    </div>
                    <div>
                        <button class="border-1 border-darkgreen rounded-[36px] px-4 lg:px-8 py-1 lg:py-3 outline outline-darkgreen font-inter">Tentang Desa</button>
                    </div>
                </div>
            </div>
        </div>
        <img class="block lg:hidden pt-24 w-full h-auto z-30 absolute left-0 right-0" src="{{asset ('images/layered-waves-haikei (10).png')}}" alt="" srcset="">
        <img class="block lg:hidden pt-80 w-full h-auto z-30 absolute left-0 right-0" src="{{asset ('images/layered-waves-haikei (4).png')}}" alt="" srcset="">
        <div class="block lg:hidden w-full mt-8">
            <div class="grid grid-cols-2 gap-4 m-8">
                <img class="w-full h-44 rounded-[30px] object-cover z-40" src="{{asset ('images/berita-3.jpg')}}" alt="" srcset="">
                <img class="w-full h-44 rounded-[30px] object-cover z-40" src="{{asset ('images/berita-3.jpg')}}" alt="" srcset="">
            </div>
        </div>
        <div class="block lg:hidden w-full flex justify-center">
            <img class="w-36 h-64 rounded-[30px] object-cover z-50 absolute top-72" src="{{asset ('images/kec-sempor.jpg')}}" alt="" srcset="">
        </div>
        <div class="hidden lg:block pl-12">
            <div class="flex flex-row">
                <span class="pr-4"><img class="lg:w-[198px] lg:h-[312px] rounded-[30px] object-cover" src="{{asset('images/kec-sempor.jpg')}} "></span>
                <div class="flex flex-col">
                    <span class="pb-4"><img class="lg:w-[298px] lg:h-[112px] rounded-[24px] object-cover" src="{{asset('images/waduk-sempor.jpg')}} "></span>
                    <span class=""><img class="lg:w-[198px] lg:h-[312px] rounded-[30px] object-cover" src="{{asset('images/berita-3.jpg')}} "></span>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Information-->
<section class="pt-12 px-32 lg:px-36 md:gap-8 gap-8 grid lg:grid-cols-3 grid-cols-1 place-content-center w-full h-max pt-32 pb-32">
    <div class="flex justify-items-center items-center grid grid-cols-1 lg:grid-cols-2 gap-4">
        <div class="text-center">
            <img class="h-24 w-auto lg:h-16 lg:w-auto" src="{{asset('images/visitor.png')}} ">
        </div>
        <div class="text-center lg:text-left">
            <p class="font-roboto font-bold lg:font-medium lg:text-2xl text-3xl">2000+</p>
            <p class="border-b-4 border-lightgreen w-max text-2xl">Pengunjung</p>
        </div>
    </div>
    <div class="flex justify-items-center items-center grid grid-cols-1 gap-4 lg:grid-cols-2">
        <div class="text-center">
            <img class="h-24 w-24 object-cover lg:h-20 lg:w-auto" src="{{asset('images/wisatawan.png')}} ">
        </div>
        <div class="text-center lg:text-left">
            <p class="font-roboto font-bold lg:font-medium lg:text-2xl text-3xl">400+ </p>
            <p class="border-b-4 border-lightgreen w-max text-2xl">Data Statistik</p>
        </div>
    </div>
    <div class="flex justify-items-center items-center grid grid-cols-1 gap-4 lg:grid-cols-2">
        <div class="text-center">
            <img class="h-24 w-24 lg:h-20 lg:w-auto" src="{{asset('images/stat.png')}} ">
        </div>
        <div class="text-center lg:text-left">
            <p class="font-roboto font-bold lg:font-medium lg:text-2xl text-3xl">100+</p>
            <p class="border-b-4 border-lightgreen w-max text-2xl">Wisatawan</p>
        </div>
    </div>
</section>

<!--Berita-->
<section class="lg:p-12 grid lg:grid-cols-2 grid-cols-1">
    <div class="bg-white shadow-xl p-4">
        <div class="inline-flex items-center justify-center w-full">
            <hr class="lg:hidden w-64 h-px my-8 bg-black border-0 dark:bg-black">
            <a href="{{route('berita.index')}}"><h1 class="font-roboto font-bold text-2xl px-4">Berita</h1></a>
            <hr class="lg:hidden w-64 h-px my-8 bg-black border-0 dark:bg-black">
        </div>
        <div class="gird grid-cols-1">
            @foreach($beritaTerbaru as $berita)
            <a href= "{{ route('beritapage', $berita->slug) }}">
            <div class="flex lg:items-center">
                <img class="w-24 h-24 lg:w-[224px] lg:h-[140.92px] object-cover" src="{{ $berita->thumbnail }}" alt="" srcset="">
                <div class="p-4">
                    <h1 class="font-plusjakartasans font-medium text-xl lg:text-2xl">{{ $berita->judul }}</h1>
                    <p class="hidden lg:block text-sm font-roboto">{{ $berita->preview }}</p>
                </div>
            </div>
            <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
            </a>
            @endforeach
        </div>
        <div class="text-end pt-8 pb-4">
            <a href="{{route('berita.index')}}" class="text-green ">Selengkapnya</a>
        </div>
    </div>
    <div class="bg-white p-4">
        <div class="inline-flex items-center justify-center w-full">
            <hr class="lg:hidden w-64 h-px my-8 bg-black border-0 dark:bg-black">
            <a href="/berita/sort?_token=sT1Mik2X4zxvd8Cb1cbdDlGFNb8aU39xiNPuWcOG&cari_berita1=&kategori=&sort=populer">
                <h1 class="font-roboto font-bold text-2xl px-4">Trending</h1>
            </a>
            <hr class="lg:hidden w-64 h-px my-8 bg-black border-0 dark:bg-black">
        </div>
        <div class="gird grid-cols-1">
        @foreach($beritaPopular as $berita)
        <a href= "{{ route('beritapage', $berita->slug) }}">
            <div class="p-4">
                <h1 class="font-plusjakartasans font-medium text-xl">{{ $berita->judul }}</h1>
            </div>
            <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
        </a>
        @endforeach
        </div>
    </div>
</section>

<section class="w-full h-screen h-max pt-24 pb-24 lg:mb-96">
    <img class="lg:hidden block w-full h-full z-30 absolute object-cover" src="{{asset ('images/kec-sempor.jpg')}}" alt="" srcset="">
    <img class="hidden lg:block w-full h-max max-h-fit z-30 absolute object-cover" src="{{asset ('images/kec-sempor.jpg')}}" alt="" srcset="">
    <div class="w-full z-40 absolute left-0 right-0 text-center">
        <h1 class="font-roboto text-white text-3xl text-bold py-8">GALERY</h1>
        <div class=" flex justify-center items-center block lg:hidden">
            <div class="bg-white shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)] rounded-xl w-max p-8 pt-8 pb-8">
                <div class="grid grid-rows-3 gap-4">
                    <div class="w-full"><img class="w-60" src="{{asset('images/Galerry/11052022081139-Jatinegara-Kebumen5.jpg')}}" alt="" srcset=""></div>
                    <div class="w-full"><img class="w-60" src="{{asset('images/Galerry/11052022081140-Jatinegara-Kebumen6.jpg')}}" alt="" srcset=""></div>
                    <div class="w-full"><img class="w-60" src="{{asset('images/Galerry/28012022084759-Jatinegara-Kebumen5.jpg')}}" alt="" srcset=""></div>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-center">
            <div class="hidden lg:flex bg-white shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)] rouded-[30px] w-4/5 grid grid-cols-2 lg:p-8 rounded-[30px]">
                <div class="text-left w-5/6 pr-8">
                    <div>Semua</div>
                    <hr class="mb-4 h-px bg-gray-200 border-0 dark:bg-gray-700">
                    <div>Pembekalan Pemutakhiran SDGs Desa Jatinegara 2023</div>
                    <hr class="mb-4 h-px bg-gray-200 border-0 dark:bg-gray-700">
                    <div>Gerdal Poktan Tri Raharjo 2</div>
                    <hr class="mb-4 h-px bg-gray-200 border-0 dark:bg-gray-700">
                    <div>Halal Bi Halal 1443H Rw. 01</div>
                    <hr class="mb-4 h-px bg-gray-200 border-0 dark:bg-gray-700">
                    <div>Menu Sehat KPM PHK dan BPNT</div>
                    <hr class="mb-4 h-px bg-gray-200 border-0 dark:bg-gray-700">
                    <div>Mudes LPJ Bumdesa Jati Maju</div>
                    <hr class="mb-4 h-px bg-gray-200 border-0 dark:bg-gray-700">
                </div>
                <div class="grid grid-flow-row grid-cols-3 gap-4">
                    <div class="grid grid-cols-1 gap-4">
                        <div><img src="{{asset('images/Galerry/11052022081139-Jatinegara-Kebumen5.jpg')}}" alt="" srcset=""></div>
                        <div><img src="{{asset('images/Galerry/11052022081140-Jatinegara-Kebumen6.jpg')}}" alt="" srcset=""></div>
                        <div><img src="{{asset('images/Galerry/28012022084759-Jatinegara-Kebumen5.jpg')}}" alt="" srcset=""></div>
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <div><img src="{{asset('images/Galerry/04072023111058-Jatinegara-Kebumen3.jpg')}}" alt="" srcset=""></div>
                        <div><img src="{{asset('images/Galerry/03062022090724-Jatinegara-Kebumen2.jpg')}}" alt="" srcset=""></div>
                        <div><img src="{{asset('images/Galerry/28012022084758-Jatinegara-Kebumen3.jpg')}}" alt="" srcset=""></div>
                    </div>
                    <div class="grid grid-cols-1 gap-4">
                        <div><img src="{{asset('images/Galerry/28012022084758-Jatinegara-Kebumen4.jpg')}}" alt="" srcset=""></div>
                        <div><img src="{{asset('images/Galerry/03062022090724-Jatinegara-Kebumen3.jpg')}}" alt="" srcset=""></div>
                        <div><img src="{{asset('images/Galerry/04072023111058-Jatinegara-Kebumen4.jpg')}}" alt="" srcset=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Logos-->
<section class="w-full flex justify-center pt-24">
    <div class="lg:w-3/4 place-content-center p-8">
        <div class="inline-flex items-center justify-center w-full pb-12">
            <hr class="lg:hidden w-8 h-px my-8 bg-black border-0 dark:bg-black">
            <h1 class="font-roboto font-bold text-2xl text-center px-4 block w-64">DIDUKUNG OLEH</h1>
            <hr class="lg:hidden w-8 h-px my-8 bg-black border-0 dark:bg-black">
        </div>
        <div class="border-2 border-black px-12 lg:px-32 rounded-[30px] shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-flow-col lg:grid-cols-4 gap-4 m-8">
                <img class="w-18 lg:w-24 lg:h-auto object-cover" src="{{asset('images/logo-1.jpg')}} ">
                <img class="w-18 lg:w-24 lg:h-auto object-cover" src="{{asset('images/logo-2.jfif')}} ">
                <img class="w-18 lg:w-24 lg:h-auto object-cover" src="{{asset('images/logo-3.jfif')}} ">
                <img class="w-18 lg:w-auto lg:h-24 object-cover" src="{{asset('images/logo-4.png')}} ">
            </div>
        </div>
    </div>
</section>
@endsection