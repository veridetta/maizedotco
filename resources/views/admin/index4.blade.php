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
        <title>Admin Maizedotco</title>
        
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
                            <a id="logoutButton" class="success-button" style="display:inline-block; background-color:#82CD47; color:white; padding:10px 20px; text-decoration:none; border:none; border-radius:5px; font-weight:bold;" href="/index3">Logout</a>
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
                                    <li class="navbar-item"><a class="navbar-link" href="/index3">Home</a></li>
                                    <li class="navbar-item"><a class="navbar-link" href="/tminder">Task Minder</a></li>
                                    <li class="navbar-item navbar-dropdown navbar-megamenu">
                                        <a class="navbar-link dropdown-indicator" href="#">
                                            <span>Varieties of Corn</span>
                                            <i class="fas fa-chevron-down"></i>
                                        </a>
                                        <div class="megamenu">
                                            <ul>
                                                <li><a href="/sweetcorn_admin" onclick="loadPage()">
                                                    <img src="../../images/jagungmanis.png" style="width: 26%; height: auto; margin-right: 5%"><span> Jagung Manis (Sweet Corn) </span>
                                                </a></li>
                                                <li><a href="/podcorn_admin" onclick="loadPage()">
                                                    <img src="../../images/jagungpolong.jpg" style="width: 35%; height: auto; margin-right: 5%"><span> Jagung Polong (Pod Corn) </span>
                                                </a></li>
                                                <li><a href="/dentcorn_admin" onclick="loadPage()">
                                                    <img src="../../images/jagunggigikuda.png" style="width: 35%; height: auto; margin-right: 5%"><span> Jagung Gigi Kuda (Dent Corn) </span>
                                                </a></li>
                                                <li><a href="/waxycorn_admin" onclick="loadPage()">
                                                    <img src="../../images/jagungketan.jpg" style="width: 35%; height: auto; margin-right: 5%"><span> Jagung Ketan (Waxy Corn) 
                                                </a></li>
                                                <li><a href="/popcorn_admin" onclick="loadPage()">
                                                    <img src="../../images/popcorn.jpg" style="width: 35%; height: auto; margin-right: 5%"><span> Jagung Brondong (Pop Corn)
                                                </a></li>
                                                <li><a href="/flintcorn_admin" onclick="loadPage()">
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
                                                <li><a href="/jenis_penyakit_admin/index" onclick="loadPage()">
                                                    <span> Menu Data Penyakit </span>
                                                </a></li>
                                                <li><a href="/diagnosa_admin" onclick="loadPage()">
                                                    <span> Diagnosa Penyakit </span>
                                                </a></li>
                                                <li><a href="/info_admin" onclick="loadPage()">
                                                    <span> Info Penyakit </span>
                                                </a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="navbar-item"><a class="navbar-link" href="/artikel_admin">Maize MindShare</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!--=====================================
                    NAVBAR PART END
        =======================================-->


        


        <!--=====================================
                    BANNER PART START
        =======================================-->
        
<main class="banner-part slider-arrow slider-dots">
    <section class="banner-1">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-6"></div>
                <div class="col-md-7 col-lg-6">
                    <div class="banner-content-1">
                        <a href="/jagung"><h1>Mengapa Website Maizedotco Mengambil Topik Jagung ?</h1></a><br><br>
                        <!-- <p>Jagung adalah tanaman asli Amerika yang tiba di Indonesia pada masa penjajahan Belanda pada abad ke-17. Awalnya diperkenalkan sebagai tanaman eksperimental dan pakan ternak, jagung kemudian berkembang sebagai sumber makanan manusia dan pakan ternak yang penting. Budidaya jagung di Indonesia terus berkembang, menjadi komoditas penting dalam pertanian dan ekonomi negara ini. Jagung juga memiliki peran strategis dalam ketahanan pangan Indonesia sebagai alternatif sumber karbohidrat selain beras.</p> -->
                        <!--<a class="btn btn-inline" href="product-list-1.html">-->
                        <!--    <i class="fas fa-shopping-basket"></i>-->
                        <!--    <span>shop now</span>-->
                        <!--</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-content-2">
                        <a href="/jekit"><h1>Mengapa Website Maizedotco Terdapat Fitur JeKit ?</h1></a>
                        <!-- <p>Jagung adalah sumber yang kaya akan nutrisi penting. Kandungan utamanya termasuk karbohidrat kompleks, serat, dan protein. Jagung juga mengandung sejumlah vitamin dan mineral, seperti vitamin B kompleks, termasuk tiamin (B1), niacin (B3), dan asam folat (B9), serta mineral seperti magnesium dan fosfor. Jagung juga dikenal sebagai sumber antioksidan, terutama karotenoid seperti beta-karoten dan lutein, yang penting untuk kesehatan mata dan sistem kekebalan tubuh. Meskipun jagung mengandung beberapa lemak, sebagian besar lemaknya adalah lemak sehat, seperti asam lemak tak jenuh ganda. Kandungan ini menjadikan jagung sebagai makanan yang bermanfaat dan serbaguna dalam pola makan sehari-hari.</p> -->
                        <!--<a class="btn btn-inline" href="product-list-1.html">-->
                        <!--    <i class="fas fa-shopping-basket"></i>-->
                        <!--    <span>shop now</span>-->
                        <!--</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-3">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-6">
                    <div class="banner-content-3">
                        <a href="/taskminder"><h1>Mengapa Website Maizedotco Terdapat Fitur TaskMinder</h1></a>
                        <!-- <p>Maizedotco merupakan website yang dapat membantu para petani jagung. Maizedotco dapat menampilkan beberapa jenis jagung, jenis penyakit jagung, dan beberapa artikel terkait jagung.
                            Maizedotco diambil dari kata 'maize' yang berarti jagung, 'dot' yang berarti titik digunakan sebagai pemisah kata, dan 'co' yang diambil dari kata corn yang berarti jagung juga.</p> -->
                        <!--<a class="btn btn-inline" href="product-list-1.html">-->
                        <!--    <i class="fas fa-shopping-basket"></i>-->
                        <!--    <span>shop now</span>-->
                        <!--</a>-->
                    </div>
                </div>
                <div class="col-md-5 col-lg-6"></div>
            </div>
        </div>
    </section>
</main>        <!--=====================================
                    BANNER PART END
        =======================================-->

        <br><br>
        <h1 style="text-align: left; background-color: #49A010; height: 40px; color: black; font-size: 30px; padding-left: 20px;">Produk Sweet Corn Delight</h1><br>
        {{-- <ol style="border: 1px solid black; border-radius: 5px; padding: 50px; width: 20%; padding: 20px;">
            <li>
                <img src="{{ asset('images/jasuke_ori.png') }}" alt="Deskripsi Gambar" style="width: 200%; height: auto; padding: 30px;">
                Jasuke Original
            </li>
        </ol> --}}
        
            <div class="gallery">
        
                <div class="content">
                    <img src="{{ asset('images/jasuke_ori.png') }}">
                    <ul>
                        <li><i class="fa fa-star checked"></i></li>
                        <li><i class="fa fa-star checked"></i></li>
                        <li><i class="fa fa-star checked"></i></li>
                        <li><i class="fa fa-star checked"></i></li>
                        <li><i class="fa fa-star checked"></i></li>
                    </ul>
                    <br>
                    <button><a href="https://wa.me/6287735560238" target="_blank">Lihat Pesanan</a></button>
                </div>
        
                <div class="content">
                    <img src="{{ asset('images/jasuke_oreo.png') }}">
                    <ul>
                        <li><i class="fa fa-star checked"></i></li>
                        <li><i class="fa fa-star checked"></i></li>
                        <li><i class="fa fa-star checked"></i></li>
                        <li><i class="fa fa-star checked"></i></li>
                        <li><i class="fa fa-star checked"></i></li>
                    </ul>
                    <br>
                    <button><a href="https://wa.me/6287735560238" target="_blank">Lihat Pesanan</a></button>
                </div>
        
                <div class="content">
                    <img src="{{ asset('images/jasuke_chips.png') }}">
                    <ul>
                        <li><i class="fa fa-star checked"></i></li>
                        <li><i class="fa fa-star checked"></i></li>
                        <li><i class="fa fa-star checked"></i></li>
                        <li><i class="fa fa-star checked"></i></li>
                        <li><i class="fa fa-star "></i></li>
                    </ul>
                    <br>
                    <button><a href="https://wa.me/6287735560238" target="_blank">Lihat Pesanan</a></button>
                </div>
        
                <div class="content">
                    <img src="{{ asset('images/jasuke_chacha.png') }}">
                    <ul>
                        <li><i class="fa fa-star checked"></i></li>
                        <li><i class="fa fa-star checked"></i></li>
                        <li><i class="fa fa-star checked"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <br>
                    <button><a href="https://wa.me/6287735560238" target="_blank">Lihat Pesanan</a></button>
                </div>
            </div>


        <!--=====================================
                     FOOTER PART START
        =======================================-->
        
<footer class="footer-part">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="footer-content">
                    <img src="../../images/logo.png" width="150" height="170">
                    <p>Aplikasi Maizedotco didesain khusus untuk membantu para petani dengan mudah dan cepat. Aplikasi ini memberikan akses yang mudah secara maksimal. </p>
                </div>
            </div>
            
            <div class="col-md-12 col-lg-4">
                <div class="footer-content">
                    <h3 class="title">Sosial Media dan Lokasi Tim Squad Legend</h3>
                    <p>Tim Squad Legend mempunyai sosial media dan lokasi yang dapat digunakan untuk menjadi sara komunika jarak jauh yang dapat dilakukan dimanapun dan kapan pun</p>
                    <ul class="footer-icon">
                        <li><a class="icon icon-inline" href="#"><i class="fas fa-envelope"></i></a> maizedotco@gmail.com </li>
                        <li><a class="icon icon-inline" href="#"><i class="fab fa-instagram"></i></a> @squad_legend </li>
                        <li><a class="icon icon-inline" href="#"><i class="fas fa-map-marker-alt"></i></a> Sekolah Vokasi IPB, Bogor, Jawa Barat</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>        <!--=====================================
                      FOOTER PART END
        =======================================-->
        

        <!--=====================================
                 FOOTER BOTTOM PART START
        =======================================-->
        
<div class="footer-bottom">
    <div class="container">
        <p>Squad Legend &copy; 2023 | All rights reserved</p>
    </div>
</div>
        <!--=====================================
                 FOOTER BOTTOM PART END
        =======================================-->
        

        <!--=====================================
                    JS LINK PART START
        =======================================-->
        <!-- FOR BOOTSTRAP -->
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('js/vendor/popper.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>

        <!-- FOR SLICK SLIDER -->
        <script src="{{ asset('js/vendor/slick.min.js') }}"></script>
        <script src="{{ asset('js/custom/slick.js') }}"></script>

        <!-- FOR COMMON SCRIPT -->
        <script src="{{ asset('js/custom/main.js') }}">
        <script data-ad-client="ca-pub-5297367046078530" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!--=====================================
                    JS LINK PART END
        =======================================-->
        <script>
            $( document ).ready(function() {
                height  = $(window).height()
                width   = $(window).width()
                $('.laporan-terbaru-img').css('height',height*0.2+'px')
            });
            
        </script>
    </body>
</html>






