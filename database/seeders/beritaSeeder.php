<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class beritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('berita')->insert([
            [
                'judul' => 'Membangkitkan Semangat di Tengah Pandemi',
                'slug' => 'Di masa pandemi ini, menjaga semangat dan motivasi menjadi sangat penting. Banyak kisah inspiratif yang bisa kita ambil pelajaran, salah satunya adalah perjuangan seorang ibu tunggal yang berhasil membuka berhasil membuka membuka berhasil membuka...',
                'kategori' => 'Motivasi',
                'published_datetime' => Carbon::now()->subDays(rand(0, 365)),
                'views' => rand(0, 1000),
            ],
            [
                'judul' => 'Pemerintah Terbitkan Regulasi Baru untuk Lindungi UMKM',
                'slug' => 'Dalam upaya mendukung perkembangan Usaha Mikro, Kecil, dan Menengah (UMKM), pemerintah mengeluarkan peraturan baru yang bertujuan untuk memberikan perlindungan hukum yang lebih kuat bagi pelaku UMKM di seluruh Indonesia bagi pelaku UMKM di seluruh Indonesia...',
                'kategori' => 'Produk Hukum',
                'published_datetime' => Carbon::now()->subDays(rand(0, 365)),
                'views' => rand(0, 1000),
            ],
            [
                'judul' => 'Program Beasiswa Desa Meningkatkan Akses Pendidi...',
                'slug' => 'Pemerintah desa meluncurkan program beasiswa yang ditujukan untuk siswa berprestasi dari keluarga kurang mampu. Program ini diharapkan dapat meningkatkan akses pendidikan tinggi bagi para pemuda di desa tinggi bagi para pemuda di desa...',
                'kategori' => 'Pendidikan',
                'published_datetime' => Carbon::now()->subDays(rand(0, 365)),
                'views' => rand(0, 1000),
            ],
            [
                'judul' => 'PAUD Lestari Kenalkan Pendidikan Lingkungan Sejak..',
                'slug' => 'Pendidikan Anak Usia Dini (PAUD) Lestari mengadakan kegiatan mengenal lingkungan untuk anak-anak. Kegiatan ini bertujuan untuk menumbuhkan kesadaran tentang pentingnya menjaga alam sejak usia dini menjaga alam  usia dini menjaga alam...',
                'kategori' => 'Pendidikan',
                'published_datetime' => Carbon::now()->subDays(rand(0, 365)),
                'views' => rand(0, 1000),
            ],
            [
                'judul' => 'Inovasi Teknologi Pertanian di Desa Tumbuh Pesat',
                'slug' => 'Desa Tumbuh Pesat mengadopsi teknologi pertanian terbaru yang membantu para petani meningkatkan hasil panen mereka. Teknologi ini mencakup penggunaan drone untuk pemantauan lahan dan aplikasi digital untuk manajemen aplikasi digital...',
                'kategori' => 'Teknologi',
                'published_datetime' => Carbon::now()->subDays(rand(0, 365)),
                'views' => rand(0, 1000),
            ],
            [
                'judul' => 'UMKM Desa Berkembang Berkat Pelatihan Digital',
                'slug' => 'Pelatihan digital yang diadakan oleh pemerintah desa berhasil membantu para pelaku UMKM mengembangkan usaha mereka secara online. Banyak UMKM yang kini mampu menjangkau pasar yang lebih luas lebih luas mampu menjangkau pasar yang lebih luas lebih luas luas lebih...',
                'kategori' => 'UMKM',
                'published_datetime' => Carbon::now()->subDays(rand(0, 365)),
                'views' => rand(0, 1000),
            ],
            [
                'judul' => 'Desa Wisata Lestari: Menggali Potensi Sejarah Lokal',
                'slug' => 'Desa Wisata Lestari menawarkan pengalaman wisata yang unik dengan menggabungkan keindahan alam dan kekayaan sejarah lokal. Pengunjung dapat belajar tentang sejarah desa sambil menikmati pemandangan alam yang indaha sambil menikmati pemandangan alam yang...',
                'kategori' => 'Wisata dan Sejarah',
                'published_datetime' => Carbon::now()->subDays(rand(0, 365)),
                'views' => rand(0, 1000),
            ],
            [
                'judul' => 'Galeri Desa Menampilkan Karya Seni Lokal',
                'slug' => 'Galeri Desa menjadi tempat bagi para seniman lokal untuk menampilkan karya-karya mereka. Pengunjung dapat menikmati berbagai jenis seni mulai dari lukisan, patung, hingga kerajinan tangan tradisional tradisional patung, hingga kerajinan tangan tradisional tradisional...',
                'kategori' => 'Galeri Desa',
                'published_datetime' => Carbon::now()->subDays(rand(0, 365)),
                'views' => rand(0, 1000),
            ],
            [
                'judul' => 'PKK Desa Gelar Pelatihan Kesehatan untuk Ibu dan Anak',
                'slug' => 'Tim Penggerak PKK Desa mengadakan pelatihan kesehatan yang fokus pada kesejahteraan ibu dan anak. Pelatihan ini mencakup topik seperti nutrisi, kesehatan ibu hamil, dan perawatan anak dan perawatan anak dan perawatan anak dan perawatan anak dan perawatan anak...',
                'kategori' => 'PKK Desa',
                'published_datetime' => Carbon::now()->subDays(rand(0, 365)),
                'views' => rand(0, 1000),
            ],
            [
                'judul' => 'KPMD Desa Tingkatkan Partisipasi Masyarakat dalam...',
                'slug' => 'Kelompok Pemberdayaan Masyarakat Desa (KPMD) aktif mengajak warga untuk berpartisipasi dalam berbagai program pembangunan desa. Kegiatan ini bertujuan untuk meningkatkan kesejahteraan dan kualitas hidup masyarakat desa dan kualitas hidup masyarakat desa...',
                'kategori' => 'KPMD Desa',
                'published_datetime' => Carbon::now()->subDays(rand(0, 365)),
                'views' => rand(0, 1000),
            ],
            [
                'judul' => 'LKMD Desa Kembangkan Program Ketahanan Pangan',
                'slug' => 'Lembaga Ketahanan Masyarakat Desa (LKMD) meluncurkan program ketahanan pangan yang berfokus pada pemanfaatan lahan kosong untuk pertanian. Program ini diharapkan dapat meningkatkan kemandirian pangan di desa meningkatkan kemandirian pangan di desa...',
                'kategori' => 'LKMD Desa',
                'published_datetime' => Carbon::now()->subDays(rand(0, 365)),
                'views' => rand(0, 1000),
            ],
            [
                'judul' => 'BPD Desa Usulkan Pembangunan Infrastruktur Baru',
                'slug' => 'Badan Permusyawaratan Desa (BPD) mengusulkan beberapa proyek pembangunan infrastruktur untuk meningkatkan aksesibilitas dan kesejahteraan warga desa. Usulan ini mencakup pembangunan jalan, jembatan, dan fasilitas umum lainnya , dan fasilitas umum lainnya...',
                'kategori' => 'BPD Desa',
                'published_datetime' => Carbon::now()->subDays(rand(0, 365)),
                'views' => rand(0, 1000),
            ],
            [
                'judul' => 'Kuliner Desa: Nikmati Kelezatan Masakan Tradisional',
                'slug' => 'Desa Kuliner menghadirkan berbagai macam masakan tradisional yang menggugah selera. Setiap hidangan disiapkan dengan resep turun-temurun yang menjaga cita rasa asli turun-temurun yang menjaga cita rasa asli turun-temurun yang menjaga cita rasa asli turun-temurun...',
                'kategori' => 'Kuliner',
                'published_datetime' => Carbon::now()->subDays(rand(0, 365)),
                'views' => rand(0, 1000),
            ],
            [
                'judul' => 'Oleh-Oleh Khas Desa yang Wajib Dibawa Pulang',
                'slug' => 'Berkunjung ke desa ini belum lengkap tanpa membawa pulang oleh-oleh khas yang terkenal. Produk oleh-oleh meliputi makanan ringan, kerajinan tangan, dan produk lokal lainnya yang unik dan berkualitas dan produk lokal lainnya yang unik dan berkualitas...',
                'kategori' => 'Oleh-oleh',
                'published_datetime' => Carbon::now()->subDays(rand(0, 365)),
                'views' => rand(0, 1000),
            ],
            [
                'judul' => 'Kerajinan Tangan Desa: Kreativitas Tanpa Batas',
                'slug' => 'Pengrajin desa menghasilkan berbagai kerajinan tangan yang memukau. Dari anyaman bambu hingga ukiran kayu, setiap karya menunjukkan kreativitas dan keahlian tinggi para pengrajin lokal para pengrajin lokal para pengrajin lokal para pengrajin lokal...',
                'kategori' => 'Kerajinan Tangan',
                'published_datetime' => Carbon::now()->subDays(rand(0, 365)),
                'views' => rand(0, 1000),
            ], 
            // [
            //     'judul' => 'Bangkit dari Keterpurukan: Kisah Inspiratif Petani Desa',
            //     'slug' => 'Kisah seorang petani desa yang berhasil bangkit dari keterpurukan setelah gagal panen berulang kali. Dengan tekad kuat dan semangat pantang menyerah, ia kini sukses dengan metode pertanian organik...',
            //     'kategori' => 'Motivasi',
            // ],
            // [
            //     'judul' => 'Peraturan Desa Baru untuk Perlindungan Lingkungan',
            //     'slug' => 'Desa Lestari menetapkan peraturan baru yang ketat untuk menjaga kelestarian lingkungan. Peraturan ini mencakup larangan penebangan liar dan pembuangan sampah sembarangan, serta kewajiban bagi warga untuk menanam pohon setiap tahun...',
            //     'kategori' => 'Produk Hukum',
            // ],
            // [
            //     'judul' => 'Kelas Online Gratis untuk Siswa Desa Terpencil',
            //     'slug' => 'Dalam upaya meningkatkan akses pendidikan, desa terpencil mengadakan kelas online gratis bagi siswa. Program ini bekerja sama dengan universitas terkemuka dan diharapkan dapat membantu siswa mendapatkan pendidikan berkualitas...',
            //     'kategori' => 'Pendidikan',
            // ],
            // [
            //     'judul' => 'PAUD Lestari Adakan Festival Kreativitas Anak',
            //     'slug' => 'PAUD Lestari mengadakan festival kreativitas yang melibatkan anak-anak dalam berbagai kegiatan seni dan kerajinan. Acara ini bertujuan untuk mengembangkan bakat dan minat anak sejak dini minat anak sejak dini...',
            //     'kategori' => 'Pendidikan',
            // ],
            // [
            //     'judul' => 'Desa Pintar: Menggunakan IoT untuk Meningkatkan Kualitas Hidup',
            //     'slug' => 'Desa Pintar mengadopsi teknologi Internet of Things (IoT) untuk meningkatkan kualitas hidup warga. Dari pemantauan kesehatan hingga pengelolaan sumber daya air, teknologi ini memberikan banyak manfaat bagi masyarakat desa...',
            //     'kategori' => 'Teknologi',
            // ],
            // [
            //     'judul' => 'UMKM Desa Raih Penghargaan Berkat Inovasi Produk',
            //     'slug' => 'Sebuah UMKM di desa ini meraih penghargaan bergengsi atas inovasi produknya yang unik dan ramah lingkungan. Penghargaan ini menjadi motivasi bagi pelaku UMKM lain untuk terus berinovasi dan berkembang...',
            //     'kategori' => 'UMKM',
            // ],
            // [
            //     'judul' => 'Menyusuri Jejak Sejarah di Desa Tua',
            //     'slug' => 'Desa Tua menawarkan tur sejarah yang mengajak pengunjung menyusuri jejak masa lampau. Dengan panduan lokal, pengunjung dapat belajar tentang sejarah desa yang kaya akan peristiwa penting dan budaya unik...',
            //     'kategori' => 'Wisata dan Sejarah',
            // ],
            // [
            //     'judul' => 'Pameran Seni Rupa di Galeri Desa Angkat Kearifan Lokal',
            //     'slug' => 'Galeri Desa mengadakan pameran seni rupa yang menampilkan karya-karya yang mengangkat kearifan lokal. Pameran ini mendapat apresiasi dari berbagai kalangan dan diharapkan dapat meningkatkan minat masyarakat terhadap seni tradisional...',
            //     'kategori' => 'Galeri Desa',
            // ],
            // [
            //     'judul' => 'PKK Desa Sukses Gelar Lomba Masak Berbasis Bahan Lokal',
            //     'slug' => 'Tim Penggerak PKK Desa sukses menggelar lomba masak yang berbasis bahan lokal. Lomba ini tidak hanya meningkatkan kreativitas ibu-ibu PKK, tetapi juga mempromosikan penggunaan bahan pangan lokal yang sehat dan bernutrisi...',
            //     'kategori' => 'PKK Desa',
            // ],
            // [
            //     'judul' => 'KPMD Desa Luncurkan Program Pemberdayaan Wanita',
            //     'slug' => 'Kelompok Pemberdayaan Masyarakat Desa (KPMD) meluncurkan program pemberdayaan wanita yang fokus pada pelatihan keterampilan dan kewirausahaan. Program ini bertujuan untuk meningkatkan kemandirian ekonomi para wanita di desa...',
            //     'kategori' => 'KPMD Desa',
            // ],
            // [
            //     'judul' => 'LKMD Desa Adakan Pelatihan Mitigasi Bencana',
            //     'slug' => 'Lembaga Ketahanan Masyarakat Desa (LKMD) mengadakan pelatihan mitigasi bencana untuk meningkatkan kesiapsiagaan warga dalam menghadapi potensi bencana alam. Pelatihan ini diikuti oleh seluruh warga desa dengan antusiasme tinggi...',
            //     'kategori' => 'LKMD Desa',
            // ],
            // [
            //     'judul' => 'BPD Desa Gelar Musyawarah Pembangunan Berkelanjutan',
            //     'slug' => 'Badan Permusyawaratan Desa (BPD) mengadakan musyawarah untuk merencanakan pembangunan berkelanjutan. Musyawarah ini melibatkan seluruh elemen masyarakat dan bertujuan untuk menyusun rencana pembangunan yang berpihak pada lingkungan dan kesejahteraan warga...',
            //     'kategori' => 'BPD Desa',
            // ],
            // [
            //     'judul' => 'Sajian Khas Desa: Resep Rahasia yang Melegenda',
            //     'slug' => 'Kuliner khas desa ini terkenal dengan resep rahasianya yang telah diwariskan turun-temurun. Setiap suapan membawa cita rasa autentik yang tak terlupakan, menjadikan desa ini destinasi kuliner yang wajib dikunjungi...',
            //     'kategori' => 'Kuliner',
            // ],
            // [
            //     'judul' => 'Oleh-Oleh Desa: Cendera Mata Unik yang Tak Boleh Terlewatkan',
            //     'slug' => 'Berbagai cendera mata unik yang dibuat oleh para pengrajin desa siap menjadi oleh-oleh yang tak terlupakan. Mulai dari anyaman, ukiran kayu, hingga produk olahan makanan, semuanya menawarkan keunikan tersendiri...',
            //     'kategori' => 'Oleh-oleh',
            // ],
            // [
            //     'judul' => 'Kerajinan Tangan Desa: Kreativitas di Tengah Keterbatasan',
            //     'slug' => 'Pengrajin desa terus berkarya di tengah keterbatasan, menghasilkan produk-produk kerajinan tangan yang luar biasa. Dari anyaman bambu hingga perhiasan dari bahan daur ulang, kreativitas mereka tidak pernah berhenti menginspirasi...',
            //     'kategori' => 'Kerajinan Tangan',
            // ]
        ]);
    }
}
