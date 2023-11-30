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
        <title>Informasi Penyakit Jagung</title>
        
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
                                    <li class="navbar-item"><a class="navbar-link" href="../artikel/artikel.php">Maize MindShare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        
        <style>
            .contrainer1 {
                margin-top: 15px;
                padding-left:115px;
                padding-bottom: 30px;
            }
    
            .contrainer1 .card1 {
                border: 2px solid black;
                width: 216px;
                border-radius: 5px;
                display: inline-block; /* Tambahkan ini untuk tampilan horizontal */
                margin-right: 30px; /* Tambahkan margin kanan agar ada jarak antar kartu */
            }
    
            .contrainer1 .card1 img {
                height: 150px;
                border-radius: 4px;
            }
            </style>
    
            <article>
            <h1>Info Penyakit</h1>
            <br><br>
            <div class="contrainer1">
                <div class="card1">
                <img src="../../images/bulai jagung.jpg" alt="Penyakit Tanaman Jagung" >
                <a href="/bulai_jagung">Bulai <br>
                merupakan penyakit yang disebabkan oleh jamur Peronosclerospora...</a>
                </div>
    
                <div class="card1">
                <img src="../../images/karat daun jagung.jpg" alt="Penyakit Tanaman Jagung">
                <a href="/karat_daun">Karat Daun <br>
                merupakan penyakit yang disebabkan oleh jamur Puccina polysora...</a>
                </div>
    
                <div class="card1">
                <img src="../../images/bercak daun.jpg" alt="Penyakit Tanaman Jagung">
                <a href="/bercak_daun">Bercak Daun <br>
                merupakan penyakit yang disebabkan oleh jamur Helminthosprorium...</a>
                </div>
    
                <div class="card1">
                <img src="../../images/hawar daun jagung.jpg" alt="Penyakit Tanaman Jagung">
                <a href="/hawar_daun">Hawar Daun <br>
                merupakan penyakit yang disebabkan oleh jamur Helminthosprorium...</a>
                </div>
    
                <br><br>
                <div class="card1">
                <img src="../../images/busuk pelepah.jpg" alt="Penyakit Tanaman Jagung">
                <a href="/busuk_pelepah">Busuk Pelepah <br>
                merupakan penyakit yang disebabkan oleh jamur Rhizoctonia zeae...</a>
                </div>
    
                <div class="card1">
                <img src="../../images/busuk batang.jpg" alt="Penyakit Tanaman Jagung">
                <a href="/busuk_batang">Busuk Batang <br>
                merupakan penyakit yang disebabkan oleh jamur seperti Diplodia maydis...</a>
                </div>
    
                <div class="card1">
                <img src="../../images/gosong.jpg" alt="Penyakit Tanaman Jagung">
                <a href="/gosong">Gosong <br>
                merupakan penyakit yang disebabkan oleh jamur Ustilago maydis...</a>
                </div>
    
                <div class="card1">
                <img src="../../images/mosaik jagung.jpg" alt="Penyakit Tanaman Jagung">
                <a href="/mosaik_jagung">Mosaik Jagung <br>
                merupakan penyakit yang disebabkan oleh virus mosaik jagung melalui serangga...</a>
                </div>
            </div>
            </article>
    
</body>
</html>