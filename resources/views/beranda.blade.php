@extends('layouts.app')
@section('content')
<div class="relative pt-24 h-screen">
    <div class="top-28 left-10 right-0 grid grid-cols-2">
        <div class="px-4 lg:pt-24 lg:pl-12">
            <div class="text-3xl lg:text-8xl font-roboto font-extrabold bg-gradient-to-r from-green-900 from-10% via-green-500 via-30% to-green-500 to-90% inline-block text-transparent bg-clip-text">Desa</div>
            <div class="text-3xl lg:text-8xl font-roboto font-extrabold bg-gradient-to-r from-green-900 from-10% via-green-500 via-30% to-green-500 to-90% inline-block text-transparent bg-clip-text">/Jatinegara/</div>
            <div class="mt-8 lg:mt-12 grid grid-cols-1 lg:grid-cols-2 w-max gap-4 lg:gap-1">
                <div>
                    <button class="bg-darkgreen rounded-[36px] text-white px-8 lg:px-12 py-1 lg:py-3 mr-4 font-inter">Cari Data</button>
                </div>
                <div>
                    <button class="border-1 border-darkgreen rounded-[36px] px-4 lg:px-8 py-1 lg:py-3 outline outline-darkgreen font-inter">Tentang Desa</button>
                </div>
            </div>
        </div>
        <div class="hidden lg:block">
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
<section class="pt-12 px-36 gap-4 grid lg:grid-cols-3 grid-cols-1 place-content-center w-full h-max pt-32 pb-32">
    <div class="flex items-center">
        <div class="px-4">
            <img class="" style="width:50px; height:50px" src="{{asset('images/visitor.png')}} ">
        </div>
        <div class="">
            <p class="font-roboto font-medium text-2xl">2000+</p>
            <p class="border-b-4 border-lightgreen w-max lg:text-2xl">Pengunjung</p>
        </div>
    </div>
    <div class="flex items-center">
        <div class="px-4">
            <img class="" style="width:50px; height:50px" src="{{asset('images/wisatawan.png')}} ">
        </div>
        <div>
            <p class="font-roboto font-medium text-2xl">400+ </p>
            <p class="border-b-4 border-lightgreen w-max lg:text-2xl">Data Statistik</p>
        </div>
    </div>
    <div class="flex items-center">
        <div class="px-4">
            <img class="" style="width:50px; height:50px" src="{{asset('images/stat.png')}} ">
        </div>
        <div>
            <p class="font-roboto font-medium text-2xl">100+</p>
            <p class="border-b-4 border-lightgreen w-max lg:text-2xl">Wisatawan</p>
        </div>
    </div>
</section>

<!--Berita-->
<section class="lg:p-12 grid lg:grid-cols-2 grid-cols-1">
    <div class="bg-white shadow-xl p-4">
        <div class="inline-flex items-center justify-center w-full">
            <hr class="lg:hidden w-64 h-px my-8 bg-black border-0 dark:bg-black">
            <h1 class="font-roboto font-bold text-2xl px-4">Berita</h1>
            <hr class="lg:hidden w-64 h-px my-8 bg-black border-0 dark:bg-black">
        </div>
        <div class="gird grid-cols-1">
            <div class="flex lg:items-center">
                <img class="w-24 h-24 lg:w-[224px] lg:h-[140.92px] object-cover" src="{{asset('images/berita-4.jpeg')}}" alt="" srcset="">
                <div class="p-4">
                    <h1 class="font-plusjakartasans font-medium text-xl lg:text-2xl">Rumah di Sempor Rusak Akibat Bencana</h1>
                    <p class="hidden lg:block text-sm font-roboto">Faktanya ketika dipantau di lapangan rumah warga yang lain tidak ada masalah. Ia bersama BPBD dan Pemerintah Desa juga telah mengecek di sekitar rumah, tidak ada bukti tanah bergerak....</p>
                </div>
            </div>
            <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
            <div class="flex items-center">
                <img class="w-24 h-24 lg:w-[224px] lg:h-[140.92px] object-cover" src="{{asset('images/berita-5.jpeg')}}" alt="" srcset="">
                <div class="p-4">
                    <h1 class="font-plusjakartasans font-medium text-xl lg:text-2xl">Teladani Muassis NU, Pergunu Sempor Kebumen Ziarah ke</h1>
                    <p class="hidden lg:block text-sm font-roboto">Faktanya ketika dipantau di lapangan rumah warga yang lain tidak ada masalah. Ia bersama BPBD dan Pemerintah Desa juga telah mengecek di sekitar rumah, tidak ada bukti tanah bergerak....</p>
                </div>
            </div>
            <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
            <div class="flex items-center">
                <img class="w-24 h-24 lg:w-[224px] lg:h-[140.92px] object-cover" src="{{asset('images/berita-6.jpg')}}" alt="" srcset="">
                <div class="p-4">
                    <h1 class="font-plusjakartasans font-medium text-xl lg:text-2xl">Rumah di Sempor Rusak Akibat Bencana</h1>
                    <p class="hidden lg:block text-sm font-roboto">Faktanya ketika dipantau di lapangan rumah warga yang lain tidak ada masalah. Ia bersama BPBD dan Pemerintah Desa juga telah mengecek di sekitar rumah, tidak ada bukti tanah bergerak....</p>
                </div>
            </div>
            <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
        </div>
        <div class="text-end pt-8 pb-4">
            <a class="text-green ">Selengkapnya</a>
        </div>
    </div>
    <div class="bg-white shadow-xl p-4">
        <div class="inline-flex items-center justify-center w-full">
            <hr class="lg:hidden w-64 h-px my-8 bg-black border-0 dark:bg-black">
            <h1 class="font-roboto font-bold text-2xl px-4">Trending</h1>
            <hr class="lg:hidden w-64 h-px my-8 bg-black border-0 dark:bg-black">
        </div>
        <div class="gird grid-cols-1">
            <div class="p-4">
                <h1 class="font-plusjakartasans font-medium text-xl">1. Rumah di Sempor Rusak Akibat Bencana</h1>
            </div>
            <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
            <div class="p-4">
                <h1 class="font-plusjakartasans font-medium text-xl">2. Teladani Muassis NU, Pergunu Sempor Kebumen Ziarah ke</h1>
            </div>
            <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
            <div class="p-4">
                <h1 class="font-plusjakartasans font-medium text-xl">3. Rumah di Sempor Rusak Akibat Bencana</h1>
            </div>
            <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
            <div class="p-4">
                <h1 class="font-plusjakartasans font-medium text-xl">4. Teladani Muassis NU, Pergunu Sempor Kebumen Ziarah ke</h1>
            </div>
            <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
            <div class="p-4">
                <h1 class="font-plusjakartasans font-medium text-xl">5. Rumah di Sempor Rusak Akibat Bencana</h1>
            </div>
            <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
        </div>
    </div>
</section>

<!--Galery-->
<section class="w-full h-screen">
    <img class="w-full h-screen z-30 absolute left-0 right-0" src="{{asset ('images/kec-sempor.jpg')}}" alt="" srcset="">
    <div class="w-full z-40 absolute left-0 right-0 text-center py-12">
        <h1 class="font-roboto text-white text-3xl text-bold">GALERY</h1>
    </div>
    <div class="w-full flex justify-center">
        <div class="bg-white shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)] rounded-[30px] w-4/5 z-40 absolute grid grid-cols-2 lg:mt-24 lg:py-8 lg:pr-[54px] lg:pl-[30px] rounded-[30px]">
            <div class="">
                <div>Semua</div>
                <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                <div>Pembekalan Pemutakhiran SDGs Desa Jatinegara 2023</div>
                <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                <div>Gerdal Poktan Tri Raharjo 2</div>
                <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                <div>Halal Bi Halal 1443H Rw. 01</div>
                <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                <div>Menu Sehat KPM PHK dan BPNT</div>
                <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                <div>Mudes LPJ Bumdesa Jati Maju</div>
                <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
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
</section>

<!--Logos-->
<section class="w-full flex justify-center pt-8">
    <div class="lg:w-3/4 place-content-center p-8">
        <div class="inline-flex items-center justify-center w-full pb-12">
            <hr class="lg:hidden w-8 h-px my-8 bg-black border-0 dark:bg-black">
            <h1 class="font-roboto font-bold text-2xl text-center px-4 block w-64">DIDUKUNG OLEH</h1>
            <hr class="lg:hidden w-8 h-px my-8 bg-black border-0 dark:bg-black">
        </div>
        <div class="border-2 border-black px-12 lg:px-32 rounded-[30px] shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-flow-col lg:lg:auto-cols-[minmax(0,_4fr)] gap-4 m-8">
                <img class="w-18 lg:w-24 lg:h-auto object-cover" src="{{asset('images/logo-1.jpg')}} ">
                <img class="w-18 lg:w-24 lg:h-auto object-cover" src="{{asset('images/logo-2.jfif')}} ">
                <img class="w-18 lg:w-24 lg:h-auto object-cover" src="{{asset('images/logo-3.jfif')}} ">
                <img class="w-18 lg:w-auto lg:h-24 object-cover" src="{{asset('images/logo-4.png')}} ">
            </div>
        </div>
    </div>
</section>
@endsection