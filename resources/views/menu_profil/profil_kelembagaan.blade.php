@extends('layouts.app')
@section('content')
<div class="container mx-auto mt-0 flex">
    <!-- Sidebar -->
    @include('partials.sidebar')
    
    <!-- Main Content -->
    <main class="w-3/4 p-4 bg-white shadow-md ml-4">
        <h2 class="bg-darkgreen text-white py-2 rounded text-center text-2xl font-bold mb-4">Profil Kelembagaan</h2>

        <div class="mb-4 pt-4">
            <h3 class="mb-4 ml-4 font-roboto font-bold text-xl">Lembaga Desa</h3>
        </div>

        <div class="collapse w-4/4 mb-4 rounded shadow-md collapse-arrow py-0">
            <input type="checkbox" /> 
            <div class="collapse-title font-roboto font-bold">
                1. BPD
            </div>
            <div class="collapse-content border-t"> 
                <p class="mt-4">Badan Permusyawaratan Desa (BPD) Adalah lembaga perdujudan demokrasi 
                    dalam penyelenggaraan pemerintahan desa. BPD bisa disebut sebagai parlemen di desa. 
                    BPD adalah lembaga baru di desa pada masa otonomi daerah di Indonesia. Berdasarkan 
                    fungsinya, BPD bisa disebut sebagai lembaga kemasyarakatan. Dikarenakan bersesuaian 
                    dengan pada pemikiran pokok yang dalam kesadaran masyarakat. Ini sejalan dengan 
                    ungkapan Soekanto (2004:219)
                </p>
                <p class="mt-4">Anggota BPD adalah para wakil dari penduduk desa yang berhubungan 
                    berdasarkan keterwakilan wilyah yang ditetapkan dengan cara musyawarah dan mufakat. 
                    Anggota BPD tersusun dari ketua Rukun Warga (RW), pemangku adat, golongan profesi, 
                    pemuka agama dan tokoh atau pemuka masyarakat lain.
                </p>
                <p class="mt-4">Masa jabatan anggota dari BPD adalah 6 tahun dan bisa diankat atau 
                    diusulkan kembali untuk masa jabatan satu kali pada berikutnya. Pimpinan dan Anggota 
                    BPD tidak diperkenankan merangkap jabatan sebagai Kepala Desan dan Perangkat Desa.
                </p>
                <p class="mt-4">Peresmian anggota BPD dikukuhkan dengan Keputusan Bupati/Walikota yang 
                    mana sebelum menjabat mengucapkan sumpah/janji secara bersama-sama dihadapan masyarakat
                    dan dipandu oleh Bupati/Walikota.
                </p>

                <p class="mt-4">Ketua BPD dipilih dari dan oleh anggota BPD dengan langsung didalam Rapat 
                    BPD yang digelar secara khusus. Fungsi dari BPD adalah menetapkan peraturan di desa 
                    secara bersama kepala desa, menampung dan menyalurkan aspirasi dari masyarakat.
                </p>
            </div>
        </div>

        <div class="collapse w-4/4 mb-4 rounded shadow-md collapse-arrow py-0">
            <input type="checkbox" /> 
            <div class="collapse-title font-roboto font-bold">
                2. PKK
            </div>
            <div class="collapse-content border-t"> 
                <p class="mt-4">Pemberdayaan Kesejahteraan Keluarga (PKK) sebagai gerakan pembangunan masyarakat 
                    bermula dari seminar ekonomi rumah tangga di Bogor tahun 1957[1]. Sebagai tindak lanjut dari 
                    seminar tersebut, pada tahun 1961 panitia penyusunan tata susunan pelajaran pada Pendidikan 
                    Kesejahteraan Keluarga (PKK), Kementerian Pendidikan bersama kementerian-kementerian lainnya 
                    menyusun 10 segi kehidupan keluarga. Gerakan PKK dimasyarakatkan berawal dari kepedulian istri 
                    gubernur Jawa Tengah pada tahun 1967 (Ibu Isriati Moenadi) setelah melihat keadaan masyarakat 
                    yang menderita busung lapar.
                </p>
                <p class="mt-4">Upaya untuk meningkatkan kesejahteraan keluarga melalui 10 segi pokok keluarga dengan
                    membentuk Tim Penggerak PKK di semua tingkatan, yang keanggotaan timnya secara relawan dan terdiri 
                    dari tokoh/pemuka masyarakat, para isteri kepala dinas/jawatan dan isteri kepala daerah s.d tingkat 
                    desa dan kelurahan yang kegiatannya didukung dengan anggaran pendapatan dan belanja daerah.
                </p>
                <p class="mt-4">Pada tanggal 27 Desember 1972 mendagri mengeluarkan surat kawat no. Sus 3/6/12 kepada 
                    seluruh gubernur kdh tk. I Jawa Tengah dengan tembusan gubernur kdh seluruh Indonesia, agar mengubah 
                    nama pendidikan kesejahteraan keluarga menjadi pembinaan kesejahteraan keluarga. Sejak itu gerakan PKK 
                    dilaksanakan di seluruh Indonesia dengan nama Pembinaan Kesejahteraan Keluarga (PKK), dan tanggal 
                    27 Desember ditetapkan sebagai "hari kesatuan gerak PKK" yang diperingati pada setiap tahun.
                </p>
                <p class="mt-4">Dalam era reformasi dan ditetapkannya TAP MPR no. IV/MPR/1999 tentang GBHN 1999-2004, 
                    serta pelaksanaan otonomi daerah berdasarkan undang-undang no.22 tahun 1999 dan undang-undang no.25
                    tahun 1999, tetapi PKK pusat tanggap dengan mengadakan penyesuaian-penyesuaian yang disepakati 
                    dalam rakernaslub PKK tanggal 31 Oktober s.d 2 November 2000 di Bandung dan hasilnya merupakan 
                    dasar dalam perumusan keputusan menteri dalam negeri dan otonomi daerah no. 53 tahun 2000, yang 
                    selanjutnya dijabarkan dalam pedoman umum gerakan Pemberdayaan dan Kesejahteraan Keluarga (PKK) ini.
                </p>
            </div>
        </div>

        <div class="collapse w-4/4 mb-4 rounded shadow-md collapse-arrow py-0">
            <input type="checkbox" /> 
            <div class="collapse-title font-roboto font-bold">
                3. Posyandu
            </div>
            <div class="collapse-content border-t"> 
                <p class="mt-4">Pos Pelayanan Keluarga Berencana - Kesehatan Terpadu (Posyandu) adalah 
                    kegiatan kesehatan dasar yang diselenggarakan dari, oleh dan untuk masyarakat yang 
                    dibantu oleh petugas kesehatan. Posyandu merupakan salah satu upaya kesehatan 
                    bersumberdaya masyarakat (UKBM).
                </p>
                <p class="mt-4">Posyandu merupakan kegiatan swadaya dari masyarakat di bidang kesehatan dengan 
                    penanggung jawab kepala desa. A.A. Gde Muninjaya (2002:169) mengatakan: ”Pelayanan kesehatan 
                    terpadu (yandu) adalah suatu bentuk keterpaduan pelayanan kesehatan yang dilaksanakan di suatu 
                    wilayah kerja Puskesmas. Tempat pelaksanaan pelayanan program terpadu di balai dusun, balai 
                    kelurahan, RW, dan sebagainya disebut dengan Pos pelayanan terpadu (Posyandu)”. Konsep Posyandu 
                    berkaitan erat dengan keterpaduan. Keterpaduan yang dimaksud meliputi keterpaduan dalam aspek 
                    sasaran, aspek lokasi kegiatan, aspek petugas penyelenggara, aspek dana dan lain sebagainya. 
                    (Departemen kesehatan, 1987:10).
                </p>
                <p class="mt-4">Posyandu dimulai terutama untuk melayani balita (imunisasi, timbang berat badan) dan 
                    orang lanjut usia (Posyandu Lansia), dan lahir melalui suatu Surat Keputusan Bersama antara Menteri 
                    Dalam Negeri RI (Mendagri), Menteri Kesehatan (Menkes) RI, Kepala Badan Koordinasi Keluarga Berencana 
                    Nasional (BKKBN) dan Ketua Tim Penggerak (TP) Pembinaan Kesejahteraan Keluarga (PKK) dan dicanangkan 
                    pada sekitar tahun 1986. Legitimasi keberadaan Posyandu ini diperkuat kembali melalui Surat Edaran 
                    Menteri Dalam Negeri dan Otonomi Daerah tertanggal 13 Juni 2001 yang antara lain berisikan “Pedoman 
                    Umum Revitalisasi Posyandu” yang antara lain meminta diaktifkannya kembali Kelompok Kerja Operasional 
                    (POKJANAL) Posyandu di semua tingkatan administrasi pemerintahan. Penerbitan Surat Edaran ini 
                    dilatarbelakangi oleh perubahan lingkungan strategis yang terjadi demikian cepat berbarengan dengan 
                    krisis moneter yang berkepanjangan.
                </p>
                <p class="mt-4">Posyandu dikembangkan atas prakarsa Presiden Soeharto pada tahun 1984, Posyandu dulu pernah 
                    menjadi kebanggaan rakyat. Setiap bulannya, rakyat berbondong-bondong mendatangi Posyandu yang 
                    dikelola berbasiskan komunitas. Tenaga sukarelawan kesehatan di Posyandu—yang telah mendapatkan 
                    pelatihan dari dinas kesehatan setempat—memberikan panduan kesehatan bagi ibu hamil dan ibu menyusui. 
                    Selain itu, Posyandu juga memberi vaksinasi dan makanan suplemen kepada bayi dan balita. Posyandu juga 
                    menjadi media deteksi dini kasus-kasus malagizi dan kekurangan gizi pada bayi dan balita.
                </p>
            </div>
        </div>

        <div class="collapse w-4/4 mb-4 rounded shadow-md collapse-arrow py-0">
            <input type="checkbox" /> 
            <div class="collapse-title font-roboto font-bold">
                4. Karang Taruna
            </div>
            <div class="collapse-content border-t"> 
                <p class="mt-4">Karang Taruna adalah organisasi kepemudaan di Indonesia yang dibentuk oleh 
                    masyarakat sebagai wadah generasi muda untuk mengembangkan diri, tumbuh, dan berkembang 
                    atas dasar kesadaran serta tanggung jawab sosial dari, oleh, dan untuk generasi muda, yang 
                    berorientasi pada tercapainya kesejahteraan sosial bagi masyarakat.
                </p>
                <p class="mt-4">Sebagai organisasi sosial kepemudaan Karang Taruna merupakan wadah pembinaan dan 
                    pengembangan serta pemberdayaan dalam upaya mengembangkan kegiatan ekonomi produktif dengan 
                    pendayagunaan semua potensi yang tersedia di lingkungan baik sumber daya manusia maupun sumber 
                    daya alam yang telah ada. Sebagai organisasi kepemudaan, Karang Taruna berpedoman pada Pedoman 
                    Dasar dan Pedoman Rumah Tangga di mana telah pula diatur tentang struktur pengurus dan masa 
                    jabatan di masing-masing wilayah mulai dari Desa/ Kelurahan sampai pada tingkat Nasional.
                </p>
                <p class="mt-4">Semua ini wujud dari pada regenerasi organisasi demi kelanjutan organisasi serta 
                    pembinaan anggota Karang Taruna baik dimasa sekarang maupun masa yang akan datang. Karang Taruna 
                    beranggotakan pemuda dan pemudi (dalam AD/ART nya diatur keanggotaannya mulai dari pemuda/i berusia 
                    mulai dari 11 - 45 tahun) dan batasan sebagai Pengurus adalah berusia mulai 17 - 35 tahun.
                    Karang Taruna didirikan dengan visi-misi tujuan memberikan pembinaan dan pemberdayaan kepada para 
                    remaja, misalnya dalam bidang keorganisasian, ekonomi, olahraga, ketrampilan, advokasi, keagamaan 
                    dan kesenian.
                </p>
            </div>
        </div>

        <div class="collapse w-4/4 mb-4 rounded shadow-md collapse-arrow py-0">
            <input type="checkbox" /> 
            <div class="collapse-title font-roboto font-bold">
                5. Rukun Warga
            </div>
            <div class="collapse-content border-t"> 
                <p class="mt-4">Rukun Warga (RW) adalah istilah pembagian wilayah di bawah Kelurahan. Rukun Warga 
                    (RW) adalah Lembaga Masyarakat yang dibentuk melalui musyawarah pengurus Rukun Tetangga (RT) 
                    di wilayah kerjanya dalam rangka pelayanan pemerintah dan masyarakat yang diakui dan dibina oleh 
                    Pemerintah Daerah yang ditetapkan oleh Lurah.
                </p>
                <p class="mt-4">Rukun Warga (RW) merupakan Lembaga Masyarakat yang diakui dan dibina oleh pemerintah 
                    untuk memelihara dan melestarikan nilai-nilai kehidupan masyarakat Indonesia yang berdasarkan 
                    kegotongroyongan dan kekeluargaan serta untuk membantu meningkatkan kelancaran tugas pemerintahan, 
                    pembangunan, dan kemasyarakatan di Kelurahan. Setiap RT sebanyak-banyaknya terdiri dari minimal 10 KK 
                    dan maksimal 50 KK di setiap RT. Setiap RW sebanyak-banyaknya terdiri dari minimal 3 RT dan maksimal 
                    10 RT.
                </p>
            </div>
        </div>

        <div class="collapse w-4/4 mb-4 rounded shadow-md collapse-arrow py-0">
            <input type="checkbox" /> 
            <div class="collapse-title font-roboto font-bold">
                6. Rukun Tetangga
            </div>
            <div class="collapse-content border-t"> 
                <p class="mt-4">Rukun Tetangga (RT) adalah pembagian wilayah di Indonesia di bawah Rukun Warga. 
                    Rukun Tetangga bukanlah termasuk pembagian administrasi pemerintahan, dan pembentukannya adalah 
                    melalui musyawarah masyarakat setempat dalam rangka pelayanan kemasyarakatan yang ditetapkan oleh 
                    Desa atau Kelurahan. Rukun Tetangga dipimpin oleh Ketua RT yang dipilih oleh warganya. Sebuah RT 
                    terdiri atas sejumlah rumah atau KK (kepala keluarga). Dalam sistem birokrasi di Indonesia, biasanya 
                    RT (Rukun Tetangga) berada di bawah RW (Rukun Warga).
                </p>
                <p class="mt-4">Rukun tetangga merupakan organisasi masyarakat yang diakui dan dibina oleh pemerintah untuk 
                    memelihara dan melestarikan nilai-nilai kehidupan masyarakat Indonesia yang berdasarkan kegotongroyongan 
                    dan kekeluargaan serta untuk membantu meningkatkan kelancaran tugas pemerintahan, pembangunan, dan 
                    kemasyarakatan di desa dan kelurahan. Setiap RT sebanyak-banyaknya terdiri dari 30 KK untuk desa dan 
                    sebanyak-banyaknya 50 KK untuk kelurahan yang dibentuk.
                </p>
                <p class="mt-4">Rukun Tetangga di Indonesia berawal dari sistem Tonarigumi yang secara harafiah berarti 
                    "kerukunan tetangga". Sistem ini diperkenalkan oleh Kekaisaran Jepang pada 1944 dan diterapkan di 
                    Indonesia oleh para tentara Jepang. Tonarigumi awalnya ditujukan untuk membentuk kelompok militer dan 
                    mobilisasi rakyat untuk perang. Setelah Jepang kalah dalam Perang Dunia II dan Indonesia merdeka, 
                    Tonarigumi diubah namanya menjadi Rukun Tetangga serta statusnya diubah menjadi pembagian 
                    administratif terkecil di Indonesia.
                </p>
            </div>
        </div>
    
        <script src="{{ asset('js/app.js') }}"></script>
    </main>
</div>
@endsection 