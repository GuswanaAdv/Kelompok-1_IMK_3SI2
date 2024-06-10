@extends('layouts.app')
@section('content')
<div class="pt-4">
    <div class="w-[589px] h-[589px] bg-greenleaves rounded-full absolute z-10 top-24 left-[-50px] translate-x-[-30%] translate-y-[20%] blur-lg">
        
    </div>
    <div class="w-[548px] h-[548px] bg-greenleaves2 rounded-full absolute z-10 top-0 right-0 translate-x-0 translate-y-[-25%] blur-[100px]">

    </div>
    <div class="z-10 top-28 left-10 right-0 absolute grid grid-cols-2">
        <div class="lg:pt-24 lg:pl-12">
            <p class="text-5xl font-roboto">Desa <span class="bg-darkgreen text-white"> Jatinegara </span></p>
            <p class="pt-4">"Tumbuh Bersama, Maju Bersama: Desa Jatinegara, Kebumen Berkah!"</p>
            <div class="lg:mt-12">
                <button class="bg-darkgreen rounded-[36px] text-white lg:px-12 lg:py-3 outline outline-darkgreen outline-1 outline-offset-2 mr-4">Cari Data</button>
                <button class="border-2 border-darkgreen rounded-[36px] lg:px-8 lg:py-3 outline outline-darkgreen outline-1 outline-offset-2">Tentang Desa</button>
            </div>
        </div>
        <div>
            <div class="flex flex-row">
                <span class="pr-4"><img class="lg:w-[198px] lg:h-[312px] rounded-[30px] object-cover" src="{{asset('images/kec-sempor.jpg')}} "></span>
                <div class="flex flex-col">
                    <span class="pb-4"><img class="lg:w-[298px] lg:h-[112px] rounded-[24px] object-cover" src="{{asset('images/waduk-sempor.jpg')}} "></span>
                    <span class=""><img class="lg:w-[198px] lg:h-[312px] rounded-[30px] object-cover" src="{{asset('images/berita-3.jpg')}} "></span>
                </div>
            </div>
        </div>
    </div>
    <section class="pt-12 px-36 absolute z-30 top-[100%] left-0 gap-4 grid lg:grid-cols-3 grid-cols-1 place-content-center w-full">
            <div>
                <p class="font-roboto font-medium text-2xl">2000+</p>
                <p class="border-b-4 border-lightgreen w-max lg:text-2xl">Pengunjung</p>
            </div>
            <div>
                <p class="font-roboto font-medium text-2xl">400+ </p>
                <p class="border-b-4 border-lightgreen w-max lg:text-2xl">Data Statistik</p>
            </div>
            <div>
                <p class="font-roboto font-medium text-2xl">100+</p> 
                <p class="border-b-4 border-lightgreen w-max lg:text-2xl">Wisatawan</p>
            </div>
    </section>

    <!--Berita-->
    <section class="z-30 absolute top-[150%] grid grid-cols-2">
        <div class="bg-white shadow-xl p-4">
            <div>
                <h1 class="font-roboto font-bold text-2xl">Berita</h1>
                <input>
            </div>
            <div class="gird grid-cols-1 divide-y-2">
                <div class="flex items-center">
                    <img class="lg:w-[224px] lg:h-[140.92px] rounded-[19px]" src="{{asset('images/berita-4.jpeg')}}" alt="" srcset="">
                    <div class="p-4">
                        <h1 class="font-roboto font-medium text-2xl">Rumah di Sempor Rusak Akibat Bencana</h1>
                        <p class="text-sm font-roboto">Faktanya ketika dipantau di lapangan rumah warga yang lain tidak ada masalah. Ia bersama BPBD dan Pemerintah Desa juga telah mengecek di sekitar rumah, tidak ada bukti tanah bergerak....</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img class="lg:w-[224px] lg:h-[140.92px] rounded-[19px]" src="{{asset('images/berita-5.jpeg')}}" alt="" srcset="">
                    <div class="p-4">
                        <h1 class="font-roboto font-medium text-2xl">Teladani Muassis NU, Pergunu Sempor Kebumen Ziarah ke</h1>
                        <p class="text-sm font-roboto">Faktanya ketika dipantau di lapangan rumah warga yang lain tidak ada masalah. Ia bersama BPBD dan Pemerintah Desa juga telah mengecek di sekitar rumah, tidak ada bukti tanah bergerak....</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img class="lg:w-[224px] lg:h-[140.92px] rounded-[19px]" src="{{asset('images/berita-6.jpg')}}" alt="" srcset="">
                    <div class="p-4">
                        <h1 class="font-roboto font-medium text-2xl">Rumah di Sempor Rusak Akibat Bencana</h1>
                        <p class="text-sm font-roboto">Faktanya ketika dipantau di lapangan rumah warga yang lain tidak ada masalah. Ia bersama BPBD dan Pemerintah Desa juga telah mengecek di sekitar rumah, tidak ada bukti tanah bergerak....</p>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <a class="text-green ">Selengkapnya</a>
            </div>
        </div>
        <div class="bg-white shadow-xl p-4">
            <div>
                <h1 class="font-roboto font-bold text-2xl">#Trending</h1>
                <input>
            </div>
            <div class="gird grid-cols-1">
                <div class="p-4">
                    <h1 class="font-roboto font-medium text-xl">Rumah di Sempor Rusak Akibat Bencana</h1>
                </div>
                <div class="p-4">
                    <h1 class="font-roboto font-medium text-xl">Teladani Muassis NU, Pergunu Sempor Kebumen Ziarah ke</h1>
                </div>
                <div class="p-4">
                    <h1 class="font-roboto font-medium text-xl">Rumah di Sempor Rusak Akibat Bencana</h1>
                </div>
            </div>
        </div>
    </section>

    <!--Data Pengunjung-->
    <section class="z-30 absolute top-[290%] grid grid-cols-2">
        <div class="bg-white shadow-xl p-4">
            <div>
                <h1 class="font-roboto font-bold text-2xl">Data Pengunjung</h1>
                <input>
            </div>
            <div class="gird grid-cols-1 divide-y-2">
                <div class="flex items-center">
                    <img class="lg:w-[224px] lg:h-[140.92px] rounded-[19px]" src="{{asset('images/berita-4.jpeg')}}" alt="" srcset="">
                    <div class="p-4">
                        <h1 class="font-roboto font-medium text-2xl">Rumah di Sempor Rusak Akibat Bencana</h1>
                        <p class="text-sm font-roboto">Faktanya ketika dipantau di lapangan rumah warga yang lain tidak ada masalah. Ia bersama BPBD dan Pemerintah Desa juga telah mengecek di sekitar rumah, tidak ada bukti tanah bergerak....</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img class="lg:w-[224px] lg:h-[140.92px] rounded-[19px]" src="{{asset('images/berita-5.jpeg')}}" alt="" srcset="">
                    <div class="p-4">
                        <h1 class="font-roboto font-medium text-2xl">Teladani Muassis NU, Pergunu Sempor Kebumen Ziarah ke</h1>
                        <p class="text-sm font-roboto">Faktanya ketika dipantau di lapangan rumah warga yang lain tidak ada masalah. Ia bersama BPBD dan Pemerintah Desa juga telah mengecek di sekitar rumah, tidak ada bukti tanah bergerak....</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img class="lg:w-[224px] lg:h-[140.92px] rounded-[19px]" src="{{asset('images/berita-6.jpg')}}" alt="" srcset="">
                    <div class="p-4">
                        <h1 class="font-roboto font-medium text-2xl">Rumah di Sempor Rusak Akibat Bencana</h1>
                        <p class="text-sm font-roboto">Faktanya ketika dipantau di lapangan rumah warga yang lain tidak ada masalah. Ia bersama BPBD dan Pemerintah Desa juga telah mengecek di sekitar rumah, tidak ada bukti tanah bergerak....</p>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <a class="text-green ">Selengkapnya</a>
            </div>
        </div>
        <div class="bg-white shadow-xl p-4">
            <div>
                <h1 class="font-roboto font-bold text-2xl">Data Penduduk</h1>
                <input>
            </div>
            <div class="gird grid-cols-1">
                <div class="p-4">
                    <h1 class="font-roboto font-medium text-xl">Rumah di Sempor Rusak Akibat Bencana</h1>
                </div>
                <div class="p-4">
                    <h1 class="font-roboto font-medium text-xl">Teladani Muassis NU, Pergunu Sempor Kebumen Ziarah ke</h1>
                </div>
                <div class="p-4">
                    <h1 class="font-roboto font-medium text-xl">Rumah di Sempor Rusak Akibat Bencana</h1>
                </div>
            </div>
        </div>
    </section>

    <!--Berita-->
    <section class="z-30 absolute top-[150%] grid grid-cols-2">
        <div class="bg-white shadow-xl p-4">
            <div>
                <h1 class="font-roboto font-bold text-2xl">Berita</h1>
                <input>
            </div>
            <div class="gird grid-cols-1 divide-y-2">
                <div class="flex items-center">
                    <img class="lg:w-[224px] lg:h-[140.92px] rounded-[19px]" src="{{asset('images/berita-4.jpeg')}}" alt="" srcset="">
                    <div class="p-4">
                        <h1 class="font-roboto font-medium text-2xl">Rumah di Sempor Rusak Akibat Bencana</h1>
                        <p class="text-sm font-roboto">Faktanya ketika dipantau di lapangan rumah warga yang lain tidak ada masalah. Ia bersama BPBD dan Pemerintah Desa juga telah mengecek di sekitar rumah, tidak ada bukti tanah bergerak....</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img class="lg:w-[224px] lg:h-[140.92px] rounded-[19px]" src="{{asset('images/berita-5.jpeg')}}" alt="" srcset="">
                    <div class="p-4">
                        <h1 class="font-roboto font-medium text-2xl">Teladani Muassis NU, Pergunu Sempor Kebumen Ziarah ke</h1>
                        <p class="text-sm font-roboto">Faktanya ketika dipantau di lapangan rumah warga yang lain tidak ada masalah. Ia bersama BPBD dan Pemerintah Desa juga telah mengecek di sekitar rumah, tidak ada bukti tanah bergerak....</p>
                    </div>
                </div>
                <div class="flex items-center">
                    <img class="lg:w-[224px] lg:h-[140.92px] rounded-[19px]" src="{{asset('images/berita-6.jpg')}}" alt="" srcset="">
                    <div class="p-4">
                        <h1 class="font-roboto font-medium text-2xl">Rumah di Sempor Rusak Akibat Bencana</h1>
                        <p class="text-sm font-roboto">Faktanya ketika dipantau di lapangan rumah warga yang lain tidak ada masalah. Ia bersama BPBD dan Pemerintah Desa juga telah mengecek di sekitar rumah, tidak ada bukti tanah bergerak....</p>
                    </div>
                </div>
            </div>
            <div class="text-end">
                <a class="text-green ">Selengkapnya</a>
            </div>
        </div>
        <div class="bg-white shadow-xl p-4">
            <div>
                <h1 class="font-roboto font-bold text-2xl">#Trending</h1>
                <input>
            </div>
            <div class="gird grid-cols-1">
                <div class="p-4">
                    <h1 class="font-roboto font-medium text-xl">Rumah di Sempor Rusak Akibat Bencana</h1>
                </div>
                <div class="p-4">
                    <h1 class="font-roboto font-medium text-xl">Teladani Muassis NU, Pergunu Sempor Kebumen Ziarah ke</h1>
                </div>
                <div class="p-4">
                    <h1 class="font-roboto font-medium text-xl">Rumah di Sempor Rusak Akibat Bencana</h1>
                </div>
            </div>
        </div>
    </section>

    <!--Galery-->
    <section class="w-full">
        <img class="w-full h-[822px] z-30 absolute top-[440%] left-0 right-0" src="{{asset ('images/kec-sempor.jpg')}}" alt="" srcset="">
        <div class="w-full z-30 absolute top-[440%] left-0 right-0 text-center py-12">
            <h1 class="font-roboto text-white text-3xl text-bold">GALERY</h1>
        </div>
        <div class="w-full flex justify-center">
            <div class="bg-white shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)] rouded-[30px] z-40 w-4/5 absolute top-[460%] grid grid-cols-2 lg:py-[79px] lg:pr-[54px] lg:pl-[30px] rounded-[30px]">
                <div class="">
                    <div>Semua</div>
                    <div>Pembekalan Pemutakhiran SDGs Desa Jatinegara 2023</div>
                    <div>Gerdal Poktan Tri Raharjo 2</div>
                    <div>Halal Bi Halal 1443H Rw. 01</div>
                    <div>Menu Sehat KPM PHK dan BPNT</div>
                    <div>Mudes LPJ Bumdesa Jati Maju</div>
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
    <section class="w-full flex justify-center">
    <div class="z-30 absolute top-[600%] lg:w-3/4 place-content-center">
        <div>
            <h1 class="font-roboto font-bold text-2xl text-center md:pb-12">DIDUKUNG OLEH</h1>
        </div>
        <div class="border-2 border-black px-32 pt-8 rounded-[30px] shadow-2xl">
            <div class="grid grid-flow-col lg:auto-cols-[minmax(0,_4fr)] gap-4">
                <img class="lg:w-24 lg:h-auto object-cover" src="{{asset('images/logo-1.jpg')}} ">
                <img class="lg:w-24 lg:h-auto object-cover" src="{{asset('images/logo-2.jfif')}} ">
                <img class="lg:w-24 lg:h-auto object-cover" src="{{asset('images/logo-3.jfif')}} ">
                <img class="lg:col-span-2 lg:w-54 lg:h-auto object-cover" src="{{asset('images/logo-4.png')}} ">
            </div>
        </div>
    </div>
    </section>
</div>
@endsection