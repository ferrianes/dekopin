<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/home', function (Request $request) {
    return response()->json([
        'data' => [
            'banner' => [
                [
                    'path' => url('img/banner/slide1.png')
                ],
                [
                    'path' => url('img/banner/slide2.png')
                ],
                [
                    'path' => url('img/banner/slide1.png')
                ]
            ],
            'news' => [
                [
                    'image' => url('img/news/1.png'),
                    'title' => '“Holding” Mikro dan Koperasi',
                    'content' => 'Polemik pembentukan Holding Ultra Mikro akhir-akhir ini menyisakan satu pertanyaan mendasar: benarkah kehadiran holding akan menggerus koperasi dan lembaga keuangan non-bank lainnya dari tengah masyarakat? Atau sebaliknya, justru berpotensi dimanfaatkan untuk memperbesar pengaruh koperasi dan Usaha Mikro, Kecil dan Menengah dalam perekonomian nasional? Mari lihat koperasi-koperasi besar di dunia. Hasil evaluasi Filene Research Institute dalam Laporan Survei Modal Koperasi pada 300 koperasi besar dunia menunjukkan selain menggunakan modal anggota untuk menjalankan usaha dan layanan koperasi, mereka juga menggunakan modal dari luar koperasi. Prosentasenya tidak selalu seragam. Di sektor perbankan rata-rata sekitar 22 persen, asuransi 11 persen dan pertanian sekitar 7 persen. Koperasi Pertanian Zen-Noh di Jepang misalnya, sebanyak 7 persen dari total sekitar US$5 miliar modal koperasinya berasal dari eksternal. Begitupun Koperasi Pertanian Fonterra di Selandia Baru. Koperasi ini tercatat memiliki modal sekitar US$5,3 miliar di mana US$31 juta diantaranya (1 persen) bersumber dari luar. Kemudahan akses permodalan (baik dari dalam dan luar koperasi) terbukti membantu koperasi terus berkembang dan puncaknya memberi manfaat lebih besar lagi terhadap seluruh anggota dan lingkungannya. Disinilah pentingnya UMKM Indonesia berkoperasi: kekuatannya solid pada orang per orang anggota—bukan pada modal.'
                ],
                [
                    'image' => url('img/news/download.jpeg'),
                    'title' => 'Koperasi Sawit JMK Naik',
                    'content' => 'Koperasi Jasa Mutiara Kombeng (JMK), adalah Koperasi yang anggotanya adalah petani kelapa sawit swadaya, yang berlokasi di Desa Makmur Jaya Kombeng, Kutai Timur, Kalimantan Timur. Koperasi ini memiliki jumlah anggota 118 petani dengan luas lahan sekitar 649,20 Ha.

                    Sekadar catatan, Koperasi JMK telah mendapatkan sertifikat Indonesian Sustainable Palm Oil (ISPO) tahun 2019 lalu, kendati hanya sekitar 42 petani saja yang lolos sertifikasi ISPO dari seluruh anggota yang terdaftar. Namun demikian sertifikasi ISPO mampu memberikan manfaat besar bagi Koperasi JMK dan anggotanya.
                    
                    Guna memperoleh sertifikasi ISPO, Koperasi JMK didukung oleh salah satu perusahaan perkebunan kelapa sawit di Kutim yakni PT Kresa Duta Agroindo (PT KDA) merupaka salah satu anak usaha grup dari Perkebunan Sinar Mas.
                    
                    “Kami dari Koperasi dan anggota itu sangat terbantu dengan sertifikasi ISPO, karena memudahkan kami untuk mendapatkan dukungan lain dari pabrik, seperti pelatihan budidaya kelapa sawit pada anggota, dan pelatihan ini sangat bermanfaat, karena dampaknya adalah TBS yang kami kirim ke pabrik itu rendah sortasi, artinya TBS dari anggota Koperasi kami sudah sesuai dengan kualitas TBS yang disyaratkan perusahaan,” ungkap Ketua Koperasi JMK, Ade Akbar dalam keterangan resmi kepada InfoSAWIT, belum lama ini.
                    
                    Tercatat, sertifikasi ISPO memang tidak memiliki dampak langsung terhadap naiknya harga TBS Sawit petani sawit swadaya, namun dengan dukungan pelatihan budidaya dan praktik budidaya yang baik dan sesuai, bakal berdampak positif terhadap meningkatnya pendapatan, akibat dari naiknya standar kualitas TBS yang dihasilkan oleh petani.
                    
                    Sementera diungkapkan Manager ICS Koperasi JMK, Sulastri, sertifikat ISPO telah membuka peluang lain bagi Koperasi JMK, lantaran saat ini pihaknya sedang dalam proses ujicoba skim kemitraan full manage. Artinya kebun anggota yang tergabung dalam Koperasi JMK bakal dikelola penuh oleh Koperasi.
                    
                    Menurut rencana Koperasi JMK ini, ditahun 2021, seluruh anggota yang berjumlah 118 petani ini akan didorong masuk dalam skema sertifikasi Roundtable on Sustainable Palm Oil (RSPO), agar bisa berkotribusi terhadap praktik minyak sawit berkelanjutan secara global. Untuk masuk dalam skema RSPO, Koperasi ini dibantu oleh GIZ dan FORTASBI, karena kebetulan Koperasi JMK ini juga telah menjadi anggota FORTASBI sejak tahun 2019 lalu.'
                ],
                [
                    'image' => url('img/news/3.jpg'),
                    'title' => 'Koperasi Masa Kini',
                    'content' => 'Rentetan panjang telah menemani perjalanan organisasi ekonomi yang diperkenalkan di Indonesia sejak awal abad ke-20 ini. Tujuannya luhur, memperbaiki dan mensejahterakan kehidupan rakyat kecil. Ia acapkali didengungkan karena mampu berdiri kokoh saat krisis ekonomi melanda negeri tahun 1998. Sayangnya, seiring waktu ia dirundung pilu. Sederat masalah perlahan menggorogoti kelembagaan dan mengikis integritasnya, menjadikan modal kepercayaan (trust capital) sebagai salah satu modal utama yang ia miliki mulai memudar. Ia bahkan dicap berjalan lamban, timbul tenggelam, bahkan mati suri dan hanya meninggalkan papan nama yang terpasang lengkap dengan logo pohon beringin. Kini, perlahan ia mulai bangkit menunjukkan taringnya. Berinovasi atas nama teknologi di tengah pusaran digitalisasi, dengan harapan sentuhan ide gerenasi mudanya. Ia semestinya bisa tumbuh jauh lebih besar, lebih dari sekedar gelar soko guru perekonomian.

                    Milenial nan Digital
                    
                    Rasanya tidak ada waktu untuk berlama-lama di tengah perkembangan teknologi yang kian pesat. Digitalisasi mengharuskan untuk segera menyesuaikan atau bahkan merubah landscape bisnis. Pilihannya hanya ada dua, melakukan reformasi ke arah digital atau memilih untuk tetap menempuh conventional way. Sayangnya, berbagai badan usaha sekelas dunia yang sempat merajai pasar global terpaksa surut karena tak lagi mampu mengikuti dan mengimbangi dinamisnya permintaan pasar.
                    
                    Di tengah disprupsi digital yang kian masif ini, Indonesia patut berbangga. Bonus demografi sudah ada di depan mata. Masa dimana banyaknya kelompok usia produktif akan lebih banyak dari non produktif. Data Badan Perencanaan Pembangunan Nasional (Bappenas) menunjukkan jumlah populasi penduduk kategori generasi milenial di Indonesia mencapai 90 juta orang[i]. Jumlah itu lebih dari sepertiga jumlah penduduk negeri ini.
                    '
                ],
                [
                    'image' => url('img/news/Picture1.png'),
                    'title' => 'Hari Koperasi Nasional, Dekopin Ziarah ke Makam Bung Hatta',
                    'content' => 'TIMESINDONESIA, JAKARTA – Menyongsong Hari Koperasi Nasional yang jatuh pada 12 Juli, Dewan Koperasi Indonesia (Dekopin) melalui Dekopinwil DKI Jakarta melakukan ziarah ke makam Bung Hatta di kompleks Pemakaman TPU Tanah Kusir, Jakarta, Jumat (2/7/2021). 
                    Ziarah tersebut dilakukan dalam rangka menyambut peringatan ulang tahun Hari Koperasi Nasional ke-74 tahun 2021. Ziarah ke makam Bung Hatta merupakan penghormatan kepada pencetus koperasi Indonesia.
                    Kegiatan yang dilakukan dalam kondisi pandemi Covid-19 ini, mengharuskan Ketua Umum Dekopin, Sri Untari mengutus Dekopinwil DKI Jakarta untuk melaksanakan agenda tabur bunga dan ziarah di makam Bung Hatta.
                    "Saya mengutus ketua Dekopinwil Jakarta dengan rekan-rekan yang ada di Jakarta untuk melaksanakan agenda kami ke makam Bung Hatta untuk mengawali semua proses pergerakan melaksanakan HUT Koperasi Nasional ke 74," ujar Sri Untari kepada TIMES Indonesia, Jumat (2/7/2021).
                    Selanjutnya, dalam kegiatan tersebut, kata Untari, Dekopinwil DKI Jakarta melakukannya secara terbatas dan tertib menerapkan protokol kesehatan.
                    "Kita mengikuti seluruh perintah dari negara. Kita melalui instruksi presiden maupun dari keputusannya. Tapi ini tidak menutup dan mengurangi makna dari kami mencintai Bung Hatta sebagai Bapak Koperasi Indonesia," ujarnya.
                    Sementara itu, perwakilan keluarga Bung Hatta, yakni Sri Edi Swasono mengapresiasi kegiatan Dekopin yang melaksanakan kegiatan ziarah dan tabur bunga secara sederhana dengan mengikuti prokes ketat.
                    "Karena ada PPKM Darurat ini, keluarga Bung Hatta pun sangat mendukung kegiatan ini meski tidak bisa ikut hadir. Maka dengan sederhana, kami berangkat sesuai dengan restu dan pangestu dari keluarga Bung Hatta," katanya.
                    Terakhir, Untari pun sangat berbangga dengan menyambut Hari ke-74 Koperasi Nasional, sebagaimana penguatan ekonomi bangsa melalui koperasi sangat penting.
                    "Jayalah koperasi Indonesia. Kuatlah ekonomi bangsa melalui koperasi," ujar Sri Untari, Ketua Umum Dekopin dalam menyongsong Hari Koperasi Nasional.'
                ]
            ],
            'podcast' => [
                [
                    'video' => 'https://youtu.be/b4J7J_HG8LM',
                    'title' => 'Membangun Koperasi Digital #AKSIDIGITALKOPERASI'
                ],
                [
                    'video' => 'https://youtu.be/jfSM0zQythg',
                    'title' => 'Dari Anggota Untuk Anggota #KOPERASIMASAKINI'
                ],
                [
                    'video' => 'https://youtu.be/BMRu1QZVVWI',
                    'title' => 'Kebangkitan Koperasi Di Era Digital #AKSIDIGITALKOPERASI'
                ],
                [
                    'video' => 'https://youtu.be/zcZPFeYMd38',
                    'title' => 'Koperasi Millennial? #KOPERASIMASAKINI'
                ]
            ],
            'gallery' => [
                [
                    'image' => url('img/gallery/1.png')
                ],
                [
                    'image' => url('img/gallery/2.png')
                ],
                [
                    'image' => url('img/gallery/3.png')
                ]
            ]
        ]
    ]);
});

Route::get('/event', function (Request $request) {
    return response()->json([
        'data' => [
            'title' => 'Digital Coop Virtual Fun Bike',
            'image' => url('img/event/bike.svg'),
            'description' => 'Olahraga sangat penting apalagi di masa pandemi Covid-19 saat ini, namun harus dilakukan dengan mematuhi protokol kesehatan.

            Demikian disampaikan Wali Kota Pariaman Genius Umar saat melepas kegiatan sepeda santai (fun bike) dalam rangka Launching Komunitas Kuretangin Balega Piaman (KKBP), di Simpang 4 Kampung Baru, Kecamatan Pariaman Tengah, Minggu (5/9-2021).
            
            "Dengan olahraga seperti bersepeda yang dilaksanakan, dapat meningkatkan imunitas tubuh. Hadirnya komunitas sepeda, akan menambah semakin banyak hal yang dapat dilakukan untuk membuat berbagai event yang dapat mendukung pariwisata Kota Pariaman," ujar Genius.
            
            Saat ini, katanya lagi, angka Covid-19 di Kota Pariaman menurun drastis, berada di Asesmen Level II, artinya boleh mengadakan kegiatan atau event, dengan tetap mematuhi protokol kesehatan.
            
            Diharapkan kekompakan dari komunitas yang ada dalam mendukung visi dan misi Pemerintah Kota Pariaman, sehingga berbagai event dapat dilakukan dalam meningkatkan kunjungan orang datang yang akhirnya berimbas pada peningkatan ekonomi masyarakat.
            
            ',
            'date' => '21 November 2021',
            'time' => '07.00 - 10.00 WIB',
            'location' => 'DKI Jakarta'
        ]
    ]);
});
