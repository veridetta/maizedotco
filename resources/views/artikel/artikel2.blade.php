<?php 
use App\Models\PenggunaModel;

$user = PenggunaModel::find(session('id_user'));

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--=====================================
                    META TAG PART START
        =======================================-->
        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        <!-- FOR WEBPAGE TITLE -->
        <title>Artikel 2</title>
        
        <!--=====================================
                    CSS LINK PART START
        =======================================-->
        <!-- FOR FAVICON -->
        <link rel="icon" href="{{ asset('images/logo.png') }}">

        <!-- FOR FLATICON -->
        <link rel="stylesheet" href="{{ asset('fonts/flaticon/flaticon.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flat-ui/2.3.0/css/flat-ui.min.css">


        <!-- FOR FONT AWESOME -->
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome/fontawesome.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">    


        <!-- FOR SLICK SLIDER -->
        <link rel="stylesheet" href="{{ asset('css/vendor/slick.css') }}">

        <!-- FOR BOOTSTRAP -->
        <link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.min.css') }}">

        <!-- FOR COMMON STYLE -->
        <link rel="stylesheet" href="{{ asset('css/custom/main.css') }}">

        <!-- FOR HOME-1 PAGE -->
        <link rel="stylesheet" href="{{ asset('css/custom/index.css') }}">
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>
        <!--=====================================
                    HEADER PART START
        =======================================-->
        
        <header class="header-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <ul class="header-info">
                            <li>
                                <i class="fas fa-globe"></i>
                                <p>Website Maizedotco</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="header-option">
                            
                            <a class="btn btn-xs" style="color: white">{{$user->email}}</a>
                            <!-- <a class="btn btn-xs" style="color: white" href="admin.html">admin</a> -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>        <!--=====================================
                    HEADER PART END
        =======================================-->


        <!--=====================================
                    NAVBAR PART START
        =======================================-->
        
        <nav class="navbar-part">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-element">
                            <ul class="left-widget">
                                <li><a class="icon icon-inline menu-bar" href="#"><i class="fas fa-align-left"></i></a></li>
                            </ul>
                            <a class="navbar-logo" href="#">
                                <img src="../../images/logo.png" alt="logo" style="width: 100px">
                                
                            </a>
                            <form class="search-form navbar-src">
                                <input type="text" placeholder="Jenis Jagung, Jenis Penyakit, Artikel ...">
                                <button class="btn btn-inline">
                                    <i class="fas fa-search"></i>
                                    <span>Cari</span>
                                </button>
                            </form>
                            <ul class="right-widget">
                                <!--<li><a class="icon icon-inline" href="signin-up.html"><i class="fas fa-user"></i></a></li>-->
                                <!--<li><a class="icon icon-inline" href="wishlist.html"><i class="fas fa-heart"></i><sup>0</sup></a></li>-->
                                <!--<li><a class="icon icon-inline" href="cartlist.html"><i class="fas fa-shopping-cart"></i><sup>0</sup></a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="navbar-slide">
                            <div class="navbar-content">
                                <div class="navbar-slide-cross">
                                    <a class="icon icon-inline cross-btn" href="#"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="navbar-slide-logo">
                                    <a href="#"><img src="https://lh3.googleusercontent.com/AVeH7Qgi6kcOFG6U_rF7b2o8LeM2T5rSN-ImZuIafNSSZ9oAPzoew_K-rB0gDIbItZY=w220" alt="logo"></a>
                                </div>
                                <form class="search-form mb-4 navbar-slide-src">
                                    <input type="text" placeholder="Nama Komoditas, Varietas, Petani ...">
                                    <button class="btn btn-inline">
                                        <i class="fas fa-search"></i>
                                        <span>Cari</span>
                                    </button>
                                </form> 


                                <ul class="navbar-list">
                                    <li class="navbar-item"><a class="navbar-link" href="/index2">Home</a></li>
                                    <li class="navbar-item"><a class="navbar-link" href="/tminder">Task Minder</a></li>
                                    <li class="navbar-item navbar-dropdown navbar-megamenu">
                                        <a class="navbar-link dropdown-indicator" href="#">
                                            <span>Varieties of Corn</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <div class="megamenu">
                                            <ul>
                                                <li><a href="/sweetcorn" onclick="loadPage()">
                                                    <img src="../../images/jagungmanis.png" style="width: 26%; height: auto; margin-right: 5%"><span> Jagung Manis (Sweet Corn) </span>
                                                </a></li>
                                                <li><a href="/podcorn" onclick="loadPage()">
                                                    <img src="../../images/jagungpolong.jpg" style="width: 35%; height: auto; margin-right: 5%"><span> Jagung Polong (Pod Corn) </span>
                                                </a></li>
                                                <li><a href="/dentcorn" onclick="loadPage()">
                                                    <img src="../../images/jagunggigikuda.png" style="width: 35%; height: auto; margin-right: 5%"><span> Jagung Gigi Kuda (Dent Corn) </span>
                                                </a></li>
                                                <li><a href="/waxycorn" onclick="loadPage()">
                                                    <img src="../../images/jagungketan.jpg" style="width: 35%; height: auto; margin-right: 5%"><span> Jagung Ketan (Waxy Corn) 
                                                </a></li>
                                                <li><a href="/popcorn" onclick="loadPage()">
                                                    <img src="../../images/popcorn.jpg" style="width: 35%; height: auto; margin-right: 5%"><span> Jagung Brondong (Pop Corn)
                                                </a></li>
                                                <li><a href="/flintcorn" onclick="loadPage()">
                                                    <img src="../../images/jagungmutiara.jpg" style="width: 35%; height: auto; margin-right: 5%"><span> Jagung Mutiara (Flint Corn)
                                                </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    
                                    <li class="navbar-item navbar-dropdown navbar-megamenu">
                                        <a class="navbar-link dropdown-indicator" href="#">
                                            <span>Jekit Corn</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <div class="megamenu">
                                            <ul>
                                                <li><a href="/diagnosa" onclick="loadPage()">
                                                    <span> Diagnosa Penyakit </span>
                                                </a></li>
                                                <li><a href="/info" onclick="loadPage()">
                                                    <span> Info Penyakit </span>
                                                </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="navbar-item"><a class="navbar-link" href="/artikel">Maize MindShare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <style>
            .success-button {
            display: inline-block;
            background-color: #49a010;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            }
        </style>
        
        <article> 
            <div class="isi">  
                <div class="judul"> 
                    <h1>46,2 Hektar Lahan Jagung Berpotensi Alami Gagal</h1>
                </div>
                <br>
                <img src="../../images/gambar2.jpg" > 
                <br><br>
                <p> 
                Kota Gorontalo, Kominfotik- Seluas 46,2 hektar lahan jagung dari total luasan kurang lebih 1250 hektar di Dungaliyo dan Batudaa berpotensi mengalami gagal panen karena posisi tanamnya yang memasuki musim kemarau. Hal ini diungkapkan Kepala Dinas Pertanian Provinsi Gorontalo Muljady Mario pada pertemuan bersama wartawan dan pimpinan media, di Angelato, Selasa malam (22/8/2023).
                <br><br>
                “Kami terus melakukan pemantauan di lapangan, laporan dari tanaman padi sampai sekarang belum ada yang gagal panen. Untuk jagung memang ada kejadian di Dungaliyo dan Batudaa,” ungkap Muljady.
                Muljady menjelaskan ada tiga asuransi dimana dua diantaranya disubsidi oleh pemerintah. Untuk usaha tani pemerintah, mensubsidi sebesar Rp144 ribu dari premi Rp180 ribu, sehingga petani hanya membayar Rp36 ribu. Jika terjadi gagal panen, maka ganti rugi yang akan diterima sebesar Rp6 juta.
                <br><br>
                Sementara untuk jagung tidak diberikan subsidi dengan premi Rp100 ribu, dan ganti rugi sebesar Rp6 juta. Terakhir, ada hewan ternak sapi yang akan mendapatkan ganti sebesar Rp10 juta dengan premi Rp200 ribu dan subsidi Rp160 ribu jika hilang atau diserang penyakit
                “Total yang sudah ikut asuransi dari luas sawah kita kurang lebih 32ribu hektar, sudah ada 4.250 hektar yang ikut asuransi padi,” kata Muljady.
                <br><br>
                Di tempat yang sama, Penjagub Ismail Pakaya menyarankan kepada para petani yang tidak bisa menanam jagung ataupun padi melalui Kadis Pertanian, agar mengganti komoditi. Ia mencontohkan Makassar yang menjual buah semangka di musim kemarau karena tidak perlu ditanam didaerah yang berair. Mengantisipasi kekeringan ini, pihaknya akan mengintervensi pasar murah dan meminta data rawan pangan.
                <br><br>
                “Biasanya saat kemarau bahan pangan kurang, harga cenderung naik, permintaan tetap, persediaannya kurang, hukum ekonomi pasti begitu. Tapi kita pemerintah sudah siap untuk itu,” ungkap Ismail.
                Melalui rapat forkopimda dan kabupaten/kota, pemerintah juga telah menyiapkan langkah antisipasi dengan kesepakatan untuk menyiapkan posko. Posko ini berfungsi untuk menerima dan menindaklanjuti laporan kekeringan padi, kekurangan air, dan kebakaran rumah atau hutan.
                </p>
                <br><br>
                <a class="success-button" href="/artikel">Kembali</a>
            </div> 
        </article>
    
</body>
</html>