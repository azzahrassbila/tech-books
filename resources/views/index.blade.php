<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tech Books </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- custom css file link-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="path/to/swiper.css" />

</head>
<body>
    <!-- header section starts -->
    <header class="header">
        <div class="header-1">
            <img src="img/logo.png" alt="">
            <span class="logo-text"> Tech Books </span>
            <form action="/" class="search-form">
                <input type="search" class="form-control" placeholder="Search..." name="search"
                    value="{{ request('search') }}">
                <button class="btn btn-custom" type="submit"><p class="search-icon fas fa-search" style="background-color: #fff"></p></button>
            </form>
        </div>
        <div class="header-2">
            <nav class="navbar">
                <a href="#home" style="margin-right: 50px">home</a>
                <a href="#featured" style="margin-right: 50px">featured books</a>
                <a href="#arrivals" style="margin-right: 50px">new arrivals</a>
            </nav>
        </div>
    </header>
    <!-- header section ends -->

<!-- home section strats -->
<section class="home" id="home">
    <div class="row">
        <div class="content">
            <h3>Welcome!</h3>
            <p>Get new inspiration, let's explore the world of books with us.</p>
        </div>
        <div class= "swiper-container home-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/7 in 1 Pemrograman Web Tingkat Lanjut.png" alt="Slide img">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/Html Php & MySQL untuk Pemula.png" alt="Slide img">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/Kitab Hacker.png" alt="Slide img">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/Membuat Aplikasi Android Tanpa Coding.png" alt="Slide img">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/Tingkatkan Profit Trading dengan ChatGPT.png" alt="Slide img">
                    </div>
                    <div class="swiper-slide">
                        <img src="img/Python untuk Programmer Pemula.png" alt="Slide img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- home section ense -->
@if($books->count())
<section class="featured" id="featured">
    <h1 class="heading"> <span>{{$title}}</span> </h1>
    <div class="swiper-container featured-slider">
        <div class="swiper-wrapper">
        @foreach ($books as $s)
            <div class="swiper-slide box">
                <div class="image">
                    <img src="{{$s->image}}" alt="">
                </div>
                <div class="content">
                    <h3>{{$s->judul}}</h3>
                    <div class="price">{{$s->harga_diskon}} <span>{{$s->harga}}</span></div>
                    <button id="infoButton" type="button" onclick="location.href={{$s->link}}">
                        more info
                    </button>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@else
<h1 class="heading" style="margin: 0 auto"> <span>Book not found.</span> </h1>
@endif
<!-- icons section strats -->
{{-- <section class="featured" id="featured" style="padding-top: 40px;">
    <h1 class="heading" style="padding-top: 20px"> <span>featured books</span> </h1>
    <div class="swiper-container featured-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide box">
                <div class="image">
                    <img src="" alt="">
                </div>
                <div class="content">
                    <h3></h3>
                    <div class="price"><span>Rp </span></div>
                    <button id="infoButton" type="button" onclick="location.href=''">
                        more info
                    </button>
                </div>
            </div>
            <div class="swiper-slide box">
                <div class="image">
                    <img src="image/Algoritma Pemrograman Dan Struktur Data Menggunakan C++.png" alt="">
                </div>
                <div class="content">
                    <h3>Algoritma Pemrograman Dan Struktur Data Menggunakan C++</h3>
                    <div class="price">Rp 130.500 <span>Rp 145.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/algoritma-pemrograman-dan-struktur-data-menggunakan-c?queryID=78f430e42b333fdaf295c9bb411a5545'">
                        more info
                    </button>
                </div>
            </div>
            @for($i = 0; $i < 10; $i++)
            <div class="swiper-slide box">
                <div class="image">
                    <img src="{{$all[$i]->image}}" alt="">
                </div>
                <div class="content">
                    <h3>{{$all[$i]->judul}}</h3>
                    <div class="price">{{$all[$i]->harga_diskon}} <span>{{$all[$i]->harga}}</span></div>
                    <button id="infoButton" type="button" onclick="location.href={{$all[$i]->link}}">
                        more info
                    </button>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section> --}}
<!-- icons section ends -->

<!-- arrivals section starts -->
<section class="arrivals" id="arrivals">
    <h1 class="heading"> <span> new arrivals </span></h1>
    <div class="swipper arrivals-slider">
        <div class="swiper-wrapper">
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Amazon Web Services (AWS) untuk Pemula.png" alt="">
                </div>
                <div class="content">
                    <h3>Amazon Web Services</h3>
                    <h3>(AWS) untuk Pemula</h3>
                    <div class="price">Rp 65.500 <span>Rp 82.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/amazon-web-services-aws-untuk-pemula?queryID=feaa25ab354002cf60b9bcb07798c045'">
                        more info
                    </button>
                </div>
            </a>
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Html Php & MySQL untuk Pemula.png" alt="">
                </div>
                <div class="content">
                    <h3>Html Php & MySQL</h3>
                    <h3> untuk Pemula</h3>
                    <div class="price">Rp 68.000 <span>Rp 85.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/html-php-dan-mysql-untuk-pemula-update-version?queryID=2e103773440ebad77fa88d76776becc8'">
                        more info
                    </button>
                </div>
            </a>
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Ilmu Hacking.png" alt="">
                </div>
                <div class="content">
                    <h3>Ilmu Hacking</h3>
                    <div class="price">Rp 108.000 <span>Rp 135.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/ilmu-hacking?queryID=b419b380223aab2adb9cc6be9f6a5bfd'">
                        more info
                    </button>
                </div>
            </a>
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Koleksi Aplikasi Web Laravel.png" alt="">
                </div>
                <div class="content">
                    <h3>Koleksi Aplikasi Web Laravel</h3>
                    <div class="price">Rp 76.000 <span>Rp 95.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/koleksi-aplikasi-web-laravel?queryID=e6b979d0528328fd6ec566a001155c46'">
                        more info
                    </button>
                </div>
            </a>
        </div>
    </div>
    <div class="swipper arrivals-slider">
        <div class="swiper-wrapper">
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Kumpulan Latihan VB.Net.png" alt="">
                </div>
                <div class="content">
                    <h3>Kumpulan Latihan VB.Net</h3>
                    <div class="price">Rp 86.400 <span>Rp 108.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/kumpulan-latihan-vbnet?queryID=6279159545086313a6f32ae72fdd2962'">
                        more info
                    </button>
                </div>
            </a>
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Logika Pemrograman Java (Update Version).png" alt="">
                </div>
                <div class="content">
                    <h3>Logika Pemrograman</h3>
                    <h3>Java (Update Version)</h3>
                    <div class="price">Rp 152.000 <span>Rp 190.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/logika-pemrograman-java-update-version?queryID=93f177a7a519fc97c8dd915a6aabef6b'">
                        more info
                    </button>
                </div>
            </a>
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Mudahnya Membuat Web e-Learning Berbasis Web dan Android.png" alt="">
                </div>
                <div class="content">
                    <h3>Mudahnya Membuat Web</h3>
                    <h3>e-Learning Berbasis </h3>
                    <h3>Web dan Android</h3>
                    <div class="price">Rp 73.600 <span>Rp 92.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/mudahnya-membuat-web-e-learning-berbasis-web-dan-android?queryID=9ac0779252b95c7971ffd003585d3049'">
                        more info
                    </button>
                </div>
            </a>
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Pemrograman Graphical User Interface Menggunakan Python & PySimpleGUI.png" alt="">
                </div>
                <div class="content">
                    <h3>Pemrograman Graphical</h3>
                    <h3>User Interface Menggunakan</h3>
                    <h3>Python & PySimpleGUI</h3>
                    <div class="price">Rp 144.000 <span>Rp 180.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/pemrograman-graphical-user-interface-menggunakan-python-py?queryID=8e3a938380d51926622197edf2d60448'">
                        more info
                    </button>
                </div>
            </a>
        </div>
    </div>
    <div class="swipper arrivals-slider">
        <div class="swiper-wrapper">
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Python untuk Analisis dan Visualisasi Data.png" alt="">
                </div>
                <div class="content">
                    <h3>Python untuk Analisis</h3>
                    <h3>& Visualisasi Data</h3>
                    <div class="price">Rp 64.000 <span>Rp 80.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/python-untuk-analisis-dan-visualisasi-data?queryID=318dc437bcc56dea0b2c3d1b21f3c972'">
                        more info
                    </button>
                </div>
            </a>
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Tingkatkan Profit Trading dengan ChatGPT.png" alt="">
                </div>
                <div class="content">
                    <h3>Tingkatkan Profit Trading</h3>
                    <h3>dengan ChatGPT</h3>
                    <div class="price">Rp 57.600 <span>Rp 72.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/tingkatkan-profit-trading-dengan-chatgpt?queryID=e2a94a1bdbf1bde3734e1268da0059f7'">
                        more info
                    </button>
                </div>
            </a>
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Belajar Pemrograman Python untuk Guru dan Murid.png" alt="">
                </div>
                <div class="content">
                    <h3>Belajar Pemrograman</h3>
                    <h3>Python untuk</h3>
                    <h3>& Murid</h3>
                    <div class="price">Rp 47.200 <span>Rp 59.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/belajar-pemrograman-python-untuk-guru-dan-murid?queryID=ed087fe09cc9a8f32fa857f14fbccb8a'">
                        more info
                    </button>
                </div>
            </a>
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Dasar-Dasar Graph Machine Learning.png" alt="">
                </div>
                <div class="content">
                    <h3>Dasar-Dasar Graph</h3>
                    <h3>Machine Learning</h3>
                    <div class="price">Rp 56.700 <span>Rp 63.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/dasar-dasar-graph-machine-learning?queryID=c90eb936c16f63fc52f5b940d95b8d4f'">
                        more info
                    </button>
                </div>
            </a>
        </div>
    </div>
    <div class="swipper arrivals-slider">
        <div class="swiper-wrapper">
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Mudah Membuat Animasi dan Game dengan Visual Basic.png" alt="">
                </div>
                <div class="content">
                    <h3>Mudah Membuat</h3>
                    <h3>Animasi dan Game</h3>
                    <h3>dengan Visual Basic</h3>
                    <div class="price">Rp 82.800 <span>Rp 92.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/mudah-membuat-animasi-dan-game-dengan-visual-basic-from-beg?queryID=3a9fcb42a78bba788bb490ed0e45c399'">
                        more info
                    </button>
                </div>
            </a>
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/PHP Edisi Lengkap.png" alt="">
                </div>
                <div class="content">
                    <h3>PHP Edisi Lengkap</h3>
                    <div class="price">Rp 75.000 <span>Rp 95.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/php-edisi-lengkap?queryID=81d64a4c14410f093c07d01af68ff13e'">
                        more info
                    </button>
                </div>
            </a>
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Belajar Sendiri Mengolah Data Dengan Python Dan Pandas.png" alt="">
                </div>
                <div class="content">
                    <h3>Belajar Sendiri Mengolah</h3>
                    <h3>Data Dengan Python</h3>
                    <h3> Dan Pandas</h3>
                    <div class="price">Rp 52.000 <span>Rp 65.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/belajar-sendiri-mengolah-data-dengan-python-dan-pandas?queryID=0f717c00519c89f0fe166ef5cf527720'">
                        more info
                    </button>
                </div>
            </a>
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Dasar Logika Pemrograman Komputer (Update Version).png" alt="">
                </div>
                <div class="content">
                    <h3>Dasar Logika Pemrograman</h3>
                    <h3>Komputer (Update Version)</h3>
                    <div class="price">Rp 88.000 <span>Rp 110.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/dasar-logika-pemrograman-komputer-update-version?queryID=1fff33054736b1d155a554b44e4215bc'">
                        more info
                    </button>
                </div>
            </a>
        </div>
    </div>
    <div class="swipper arrivals-slider">
        <div class="swiper-wrapper">
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Logika Pemrograman Menggunakan Java.png" alt="">
                </div>
                <div class="content">
                    <h3>Logika Pemrograman</h3>
                    <h3>Menggunakan Java</h3>
                    <div class="price">Rp 119.000 <span></span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/logika-pemrograman-menggunakan-java?queryID=0480c96a5770dd9ef94faa8876654a44'">
                        more info
                    </button>
                </div>
            </a>
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Membuat Aplikasi Android Tanpa Coding.png" alt="">
                </div>
                <div class="content">
                    <h3>Membuat Aplikasi Android</h3>
                    <h3>Tanpa Coding</h3>
                    <div class="price">Rp 52.000 <span>Rp 65.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/membuat-aplikasi-android-tanpa-coding?queryID=0be79e24b3f9e249456740ce8cfaf615'">
                        more info
                    </button>
                </div>
            </a>
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Mengembalikan Data yang Hilang.png" alt="">
                </div>
                <div class="content">
                    <h3>Mengembalikan Data</h3>
                    <h3>yang Hilang</h3>
                    <div class="price">Rp 60.000 <span>Rp 75.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/mengembalikan-data-yang-hilang?queryID=af6ffc885aad9d70aa11b88340675097'">
                        more info
                    </button>
                </div>
            </a>
            <a href="#" class="swiper-slide box">
                <div class="image">
                    <img src="img/Rekayasa Perangkat Lunak Berorientasi Objek Menggunakan PHP.png" alt="">
                </div>
                <div class="content">
                    <h3>Rekayasa Perangkat</h3>
                    <h3>Lunak Berorientasi</h3>
                    <h3>Objek Menggunakan PHP</h3>
                    <div class="price">Rp 80.100 <span>Rp 89.000</span></div>
                    <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/rekayasa-perangkat-lunak-berorientasi-objek-menggunakan-php?queryID=a6740747341533bef189303d6b47216e'">
                        more info
                    </button>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- arrivals section ends -->

<!-- deal section starts -->
<section class="deal">
    <div class="content">
        <h3>deal of the day!</h3>
        <h1>7 in 1 Pemrograman Web </h1>
        <h1>Tingkat Lanjut</h1>
        <p>Rp 59.840</p>
        <button id="infoButton" type="button" onclick="location.href='https://www.gramedia.com/products/7-in-1-pemrograman-web-tingkat-lanjut?queryID=475fcb19342d2db1882a3cee6334fe0f'">
            more info
        </button>
    </div>
    <div class="image">
        <img src="img/7 in 1 Pemrograman Web Tingkat Lanjut.png" alt="">
    </div>
</section>
<!-- deal section ends -->

<!-- reviews section starts -->   
<section class="reviews" id="reviews">
    <h1 class="heading"> <span>our founder</span></h1>
    <div class="reviews-slider">
        <div class="wrapper">
            <div class="box">
                <div class="image">
                    <img src="img/pic4.png" alt="">
                </div>
                <div class="content">
                    <h3>Tyo</h3>
                    <p>Saya ingin website ini menjadi wadah yang dapat</p>
                    <p>diandalkan bagi setiap pembaca, sehingga dapat</p>
                    <p>membantu mereka menemukan buku yang sesuai</p>
                    <p>prefrensi agar mendapatkan wawasan yang berharga.</p>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="img/pic2.png" alt="">
                </div>
                <div class="content">
                    <h3>Indy</h3>
                    <p>Harapan saya untuk website ini semoga dapat</p>
                    <p>menjadi sumber refrensi dan pengetahuan bagi pengguna,</p>
                    <p>serta dapat memberikan kontribusi positif melalui</p>
                    <p>rekomendasi yang kami tawarkan.</p>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="img/pic1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Zara</h3>
                    <p>Semoga website ini tidak hanya menyediakan rekomendasi</p>
                    <p>buku, tetapi juga menjadi kompas untuk menggali ragam</p>
                    <p>pengetahuan, memperluas pandangan, dan memupuk</p>
                    <p>kecintaan terhadap dunia literasi.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- reviews section ends -->

<!-- footer section starts -->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href=""> <i class="fas fa-arrow right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> arrivals </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> reviews </a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +62 8211489302 </a>
            <a href="#"> <i class="fas fa-envelope"></i> techbooks@gmail.com </a>
        </div>
    </div>
    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>
    <div class="credit"> created by <span>tyo, indy, zara</span></div>
</section>
</section>
<!-- footer section ends -->


<style>
@media (max-width: 1024px) {
    .header .header-1{
        padding: 2rem;
    }
    .section{
        padding: 3rem 2rem;
    }
}
@media (max-width: 480px){
    html{
        scroll-padding-top: 0;
    }
    body{
        padding-bottom: 6rem;
    }
    .header .header-2{
        display: none;
    }
    .bottom-navbar{
        display: flex;
    }
    #search-form{
        display: inline-block;
    }
    .header .header-1{
        box-shadow: var(--box-shadow);
        position: relative;
    }
    .header .header-1 .search-form{
        position: absolute;
        top: -115%; right: 2rem;
        width: 90%;
        box-shadow: var(--box-shadow);
    }
    .header .header-1 .search-form.active{
        top: 115;
    }
    .home .row .content{
        align-items: center;
    }
    .home .row .content h3{
        font-size: 3.5rem;
    }
    .newsletter{
        background-position: right;
    }
    .newsletter form{
        margin-left: 0;
        max-width: 100%;
    }
}
@media (max-width: 320px){
    html{
        font-size: 50%;
    }
}


</style>




<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>