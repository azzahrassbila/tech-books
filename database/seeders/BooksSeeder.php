<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['judul' => 'Semua Bisa Menjadi Programmer Python Case Study', 'harga_diskon'=>"57.600", 'harga'=>'72000', 'link'=>'https://www.gramedia.com/products/semua-bisa-menjadi-programmer-python-case-study?queryID=cf9447b61280c1225621fe0260e91d35', 'image'=>'img/Semua Bisa Menjadi Programmer Python Case Study.png'],
            ['judul' => 'Python Untuk Programmer Pemula', 'harga_diskon'=>"59.840", 'harga'=>'74.800', 'link'=>'https://www.gramedia.com/products/python-untuk-programmer-pemula?queryID=04099f8cc30bbed8600066823116e5bf', 'image'=>'img/Python Untuk Programmer Pemula.png'],
            ['judul' => 'Algoritma Pemrograman dan Struktur Data Menggunakan c++', 'harga_diskon'=>"130.500", 'harga'=>'145.000', 'link'=>'https://www.gramedia.com/products/algoritma-pemrograman-dan-struktur-data-menggunakan-c?queryID=78f430e42b333fdaf295c9bb411a5545', 'image'=>'img/Algoritma Pemrograman Dan Struktur Data Menggunakan C++.png'],
            ['judul' => 'Buku Sakti HTML, CSS & Javascript Pemrograman Web Itu Gampang', 'harga_diskon'=>"60.000", 'harga'=>'', 'link'=>'https://www.gramedia.com/products/buku-sakti-html-css-javascript-pemrograman-web-itu-gamp?queryID=d083f18dfe37f80c11cd4fbfeeefe5bf', 'image'=>'img/Buku Sakti HTML, CSS & Javascript Pemrograman Web Itu Gampang.png'],
            ['judul' => 'Data Mining, Algoritma Dan Implementasi', 'harga_diskon'=>"66.600", 'harga'=>'74.000', 'link'=>'https://www.gramedia.com/products/data-mining-algoritma-dan-implementasi?queryID=0ec50484f94349ceb437c940b8c75b68', 'image'=>'img/Data Mining, Algoritma Dan Implementasi.png'],
            ['judul' => 'Firebase Membangun Aplikasi Berbasis Android', 'harga_diskon'=>"51.300", 'harga'=>'57.000', 'link'=>'https://www.gramedia.com/search?q=Firebase%20Membangun%20Aplikasi%20Berbasis%20Android', 'image'=>'img/Firebase Membangun Aplikasi Berbasis Android.png'],
            ['judul' => 'Kitab Hacker', 'harga_diskon'=>"60.000", 'harga'=>'75.000', 'link'=>'https://www.gramedia.com/products/kitab-hacker?queryID=3267c07b9862dd855894f36dd435d0bf', 'image'=>'img/Kitab Hacker.png'],
            ['judul' => 'Koleksi Program Web PHP', 'harga_diskon'=>"76.000", 'harga'=>'95.000', 'link'=>'https://www.gramedia.com/products/koleksi-program-web-php?queryID=c75ef7bb02d53629afec4d5726aeead0', 'image'=>'img/Koleksi Program Web PHP.png'],
            ['judul' => 'Kumpulan Solusi Pemrograman Python Edisi Revisi', 'harga_diskon'=>"120.000", 'harga'=>'', 'link'=>'https://www.gramedia.com/products/kumpulan-solusi-pemrograman-python-edisi-revisi?queryID=ff64c968e5938ccdbfd1726cace2e0bd', 'image'=>'img/Kumpulan Solusi Pemrograman Python Edisi Revisi.png'],
            ['judul' => 'Lancar Java & JavaScript', 'harga_diskon'=>"60.000", 'harga'=>'75.000', 'link'=>'https://www.gramedia.com/products/lancar-java-dan-javascript?queryID=280343ad9395c6cab79362f9241ae723', 'image'=>'img/Lancar Java & JavaScript.png'],
            ['judul' => 'Logika Pemrograman Python', 'harga_diskon'=>"112.000", 'harga'=>'140.000', 'link'=>'https://www.gramedia.com/products/logika-pemrograman-python?queryID=fbf0f3dfeba618a76caef21431db616e', 'image'=>'img/Logika Pemrograman Python.png'],
            ['judul' => 'Pemrograman Python untuk Penanganan Big Data', 'harga_diskon'=>"66.600", 'harga'=>'74.000', 'link'=>'https://www.gramedia.com/products/pemrograman-python-untuk-penanganan-big-data?queryID=e03a0336ddefd675c415d2e3231bef8a', 'image'=>'img/Pemrograman Python untuk Penanganan Big Data.png'],
            ['judul' => 'Pengenalan Machine Learning dengan Python', 'harga_diskon'=>"68.000", 'harga'=>'85.000', 'link'=>'https://www.gramedia.com/products/pengenalan-machine-learning-dengan-python?queryID=4349e8c6b61c7c3a136903acc6d4e67e', 'image'=>'img/Pengenalan Machine Learning dengan Python.png'],
            ['judul' => 'Amazon Web Services (AWS) untuk Pemula', 'harga_diskon'=>"65.500", 'harga'=>'82.000', 'link'=>'https://www.gramedia.com/products/amazon-web-services-aws-untuk-pemula?queryID=feaa25ab354002cf60b9bcb07798c045', 'image'=>'img/Amazon Web Services (AWS) untuk Pemula.png'],
            ['judul' => 'Html Php & MySQL untuk Pemula', 'harga_diskon'=>"68.000", 'harga'=>'85.000', 'link'=>'https://www.gramedia.com/products/html-php-dan-mysql-untuk-pemula-update-version?queryID=2e103773440ebad77fa88d76776becc8', 'image'=>'img/Html Php & MySQL untuk Pemula.png'],
            ['judul' => 'Ilmu Hacking', 'harga_diskon'=>"108.000", 'harga'=>'135.000', 'link'=>'https://www.gramedia.com/products/ilmu-hacking?queryID=b419b380223aab2adb9cc6be9f6a5bfd', 'image'=>'img/Ilmu Hacking.png'],
            ['judul' => 'Koleksi Aplikasi Web Laraver', 'harga_diskon'=>"76.000", 'harga'=>'95.000', 'link'=>'https://www.gramedia.com/products/koleksi-aplikasi-web-laravel?queryID=e6b979d0528328fd6ec566a001155c46', 'image'=>'img/Koleksi Aplikasi Web Laraver.png'],
            ['judul' => 'Kumpulan Latihan VB.Net', 'harga_diskon'=>"86.400", 'harga'=>'108.000', 'link'=>'https://www.gramedia.com/products/kumpulan-latihan-vbnet?queryID=6279159545086313a6f32ae72fdd2962', 'image'=>'img/Kumpulan Latihan VB.Net.png'],
            ['judul' => 'Logika Pemrograman Java (Update Version)', 'harga_diskon'=>"152.000", 'harga'=>'190.000', 'link'=>'https://www.gramedia.com/products/logika-pemrograman-java-update-version?queryID=93f177a7a519fc97c8dd915a6aabef6b', 'image'=>'img/Logika Pemrograman Java (Update Version).png'],
            ['judul' => 'Mudahnya Membuat Web e-Learning Berbasis Web dan Android', 'harga_diskon'=>"73.600", 'harga'=>'92.000', 'link'=>'https://www.gramedia.com/products/mudahnya-membuat-web-e-learning-berbasis-web-dan-android?queryID=9ac0779252b95c7971ffd003585d3049', 'image'=>'img/Mudahnya Membuat Web e-Learning Berbasis Web dan Android.png'],
            ['judul' => 'Pemrograman Graphical User Interface Menggunakan Python & PySimpleGUI', 'harga_diskon'=>"144.000", 'harga'=>'180.000', 'link'=>'https://www.gramedia.com/products/pemrograman-graphical-user-interface-menggunakan-python-py?queryID=8e3a938380d51926622197edf2d60448', 'image'=>'img/Pemrograman Graphical User Interface Menggunakan Python & PySimpleGUI.png'],
            ['judul' => 'Python Untuk Analisis dan Visualisasi Data', 'harga_diskon'=>"64.000", 'harga'=>'80.000', 'link'=>'https://www.gramedia.com/products/python-untuk-analisis-dan-visualisasi-data?queryID=318dc437bcc56dea0b2c3d1b21f3c972', 'image'=>'img/Python Untuk Analisis dan Visualisasi Data.png'],
            ['judul' => 'Tingkatkan Profit Trading dengan ChatGPT', 'harga_diskon'=>"57.600", 'harga'=>'72.000', 'link'=>'https://www.gramedia.com/products/tingkatkan-profit-trading-dengan-chatgpt?queryID=e2a94a1bdbf1bde3734e1268da0059f7', 'image'=>'img/Tingkatkan Profit Trading dengan ChatGPT.png'],
            ['judul' => 'Belajar Pemrograman Python untuk Guru dan Murid', 'harga_diskon'=>"47.200", 'harga'=>'59.000', 'link'=>'https://www.gramedia.com/products/belajar-pemrograman-python-untuk-guru-dan-murid?queryID=ed087fe09cc9a8f32fa857f14fbccb8a', 'image'=>'img/Belajar Pemrograman Python untuk Guru dan Murid.png'],
            ['judul' => 'Dasar-Dasar Graph Machine Learning', 'harga_diskon'=>"56.700", 'harga'=>'63.000', 'link'=>'https://www.gramedia.com/products/dasar-dasar-graph-machine-learning?queryID=c90eb936c16f63fc52f5b940d95b8d4f', 'image'=>'img/Dasar-Dasar Graph Machine Learning.png'],
            ['judul' => 'Mudah Membuat Animasi dan Game dengan Visual Basic', 'harga_diskon'=>"82.800", 'harga'=>'92.000', 'link'=>'https://www.gramedia.com/products/mudah-membuat-animasi-dan-game-dengan-visual-basic-from-beg?queryID=3a9fcb42a78bba788bb490ed0e45c399', 'image'=>'img/Mudah Membuat Animasi dan Game dengan Visual Basic.png'],
            ['judul' => 'Logika Pemrograman Menggunakan Java', 'harga_diskon'=>"119.000", 'harga'=>'', 'link'=>'https://www.gramedia.com/products/logika-pemrograman-menggunakan-java?queryID=0480c96a5770dd9ef94faa8876654a44', 'image'=>'img/Logika Pemrograman Menggunakan Java.png'],
            ['judul' => 'Membuat Aplikasi Android Tanpa Coding', 'harga_diskon'=>"52.000", 'harga'=>'65.000', 'link'=>'https://www.gramedia.com/products/membuat-aplikasi-android-tanpa-coding?queryID=0be79e24b3f9e249456740ce8cfaf615', 'image'=>'img/Membuat Aplikasi Android Tanpa Coding.png'],
            ['judul' => 'PHP Edisi Lengkap', 'harga_diskon'=>"76.000", 'harga'=>'95.000', 'link'=>'https://www.gramedia.com/products/php-edisi-lengkap?queryID=81d64a4c14410f093c07d01af68ff13e', 'image'=>'img/PHP Edisi Lengkap.png'],
            ['judul' => 'Belajar Sendiri Mengolah Data Dengan Python Dan Panda', 'harga_diskon'=>"52.000", 'harga'=>'65.000', 'link'=>'https://www.gramedia.com/products/belajar-sendiri-mengolah-data-dengan-python-dan-pandas?queryID=0f717c00519c89f0fe166ef5cf527720', 'image'=>'img/Belajar Sendiri Mengolah Data Dengan Python Dan Pandas.png'],
            ['judul' => 'Mengembalikan Data yang Hilang', 'harga_diskon'=>"60.000", 'harga'=>'75.000', 'link'=>'https://www.gramedia.com/products/mengembalikan-data-yang-hilang?queryID=af6ffc885aad9d70aa11b88340675097', 'image'=>'img/Mengembalikan Data yang Hilang.png'],
            ['judul' => 'Rekayasa Perangkat Lunak Berorientasi Objek Menggunakan PHP', 'harga_diskon'=>"80.100", 'harga'=>'89.000', 'link'=>'https://www.gramedia.com/products/rekayasa-perangkat-lunak-berorientasi-objek-menggunakan-php?queryID=a6740747341533bef189303d6b47216e', 'image'=>'img/Rekayasa Perangkat Lunak Berorientasi Objek Menggunakan PHP.png'],
            ['judul' => 'Dasar Logika Pemrograman Komputer (Update Version)', 'harga_diskon'=>"88.000", 'harga'=>'110.000', 'link'=>'https://www.gramedia.com/products/dasar-logika-pemrograman-komputer-update-version?queryID=1fff33054736b1d155a554b44e4215bc', 'image'=>'img/Dasar Logika Pemrograman Komputer (Update Version).png'],
            ['judul' => '7 in 1 pemrograman tingkat lanjut', 'harga_diskon'=>"59.840", 'harga'=>'74.800', 'link'=>'https://www.gramedia.com/products/7-in-1-pemrograman-web-tingkat-lanjut?queryID=475fcb19342d2db1882a3cee6334fe0f', 'image'=>'img/7 in 1 pemrograman tingkat lanjut.png'],
        ];
        DB::table('books')->insert($data);
    }
}
