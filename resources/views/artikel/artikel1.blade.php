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
        <title>Artikel 1</title>
        
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
                    <h1>Kisah Sarjana yang Memilih Bertani Jagung, Kini Sehari Bisa Raup Rp 300 Juta</h1>
                </div>
                <br>
                <img src="../../images/gambar1.jpg" > 
                <br><br>
                <p> 
                Menurut Anda, ada berapa persen sarjana pertanian yang lulus, meninggalkan ijazahnya, lalu memutuskan untuk membajak sawah? Kalau jawaban Anda penuh dengan keraguan, maka tak ada salahnya untuk mengetahui kisah seorang perempuan bernama Kartini, yang dari keputusannya untuk menggeluti bidang pertanian, ia kini berhasil sukses besar. Telah sejak kecil, perempuan yang bernama lengkap Kartini Lani itu hidup di pedesaan dan jauh dari ingar bingar kota. Namun, seiring berjalannya waktu, Kartini dewasa pun tak hanya berpangku tangan. Melihat potensi jagung yang melimpah di kawasan sekitar tempat tinggalnya di Grobogan, Jawa Tengah, ia lantas merintis usaha jagung. Memulai semua dari nol, Kartini mengembangkan usahanya sedikit demi sedikit, berawal dari sepetak tanah yang luasnya tak seberapa.
                <br><br>
                Uniknya, lantaran ketika memulai usaha itu, Kartini tergolong telah akrab dengan teknologi dan internet, ia menempuh jalur yang tak biasa untuk memasarkan produknya. Saat kebanyakan petani jagung menjual produk mereka ke tengkulak, Kartini memasarkan jagung hasil panennya melalui situs online dan media sosial.
                Lewat cara tersebut, tak disangkanya, Kartini mendapatkan banyak klien dari berbagai kota, bahkan dari luar Pulau Jawa. Pembeli-pembeli dari Blora dan Pemalang, Tuban, Malang, Madiun, Ponorogo, Tasikmalaya, Jakarta, hingga beberapa daerah di Pulau Sumatera dan Kalimantan, menjadi konsumen rutin jagung Kartini yang dipasarkan lewat dunia maya itu.
                <br><br>
                Berkat ketekunannya, seiring berjalannya waktu, usaha Kartini kian berkembang. Di bawah bendera usaha yang kemudian Kartini beri nama UD Putra Megatawang, konsumen jagung hasil panen Kartini makin meluas bahkan loyal hari ke hari.
                Di samping itu, melalui strategi promosi unik via daring, membludaknya permintaan pasar membuat UD Putra Megatawang dapat memanen jagung tak kurang dari 200 ton setiap harinya. Dengan harga jual jagung basah berkisar Rp 1.500 per kilogram, bisnis Kartini mendatangkan omzet tak kurang dari Rp 300 juta per hari atau sekitar Rp 9 miliar setiap bulannya.
                <br><br>
                Kini, dengan dibantu 30 tenaga kerja serabutan dan 10 admin, pesatnya perkembangan UD Putra Megatawang membuat Kartini mulai melebarkan sayap bisnisnya: saat ini, Kartini tak hanya memasarkan jagung, namun juga hasil pertanian lain, seperti gabah, beras, kacang hijau, kedelai, dan lain sebagainya.
                Dengan menjunjung tinggi kejujuran dan menawarkan harga yang berani bersaing pada para pembeli, Kartini kini menjadi juragan yang mengantongi miliaran rupiah setiap bulan dari bisnis pertanian yang ia tekuni. Maka kini, pada saat anggapan banyak orang membuat profesi petani tampak amat remeh, Kartini yang merupakan seorang perempuan dengan mantap menggeluti urusan itu. Dari keputusan tersebut, tak datang apa-apa dalam hidupnya kecuali nasib baik dan kekayaan.
                <br><br>
                <a class="success-button" href="/artikel">Kembali</a>
            </div> 
        </article>
    
</body>
</html>