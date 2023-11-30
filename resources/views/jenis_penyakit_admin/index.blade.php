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
        <title>Data Penyakit</title>
        
        <!--=====================================
                    CSS LINK PART START
        =======================================-->
        <!-- FOR FAVICON -->
        <link rel="icon" href="{{ asset('images/logo.png') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

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
                                    <li class="navbar-item"><a class="navbar-link" href="/index4">Home</a></li>
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
            
        </style>

        <article> 
            <div class="container">
                <h2>Data Jenis Penyakit Tanaman Jagung</h2><br>
                <a href="javascript:void(0);" class="btn btn-primary btn-sm mb-3" id="add">Tambah Data</a>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr class="table-dark">
                            <th>Aksi</th>
                            <th>Nama Penyakit</th>
                            <th>Deskripsi</th>
                            <th>Solusi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data ?? [] as $row)
                            <tr>
                                <td>
                                    <a href="javascript:void(0);" class="btn btn-warning btn-sm edit" data-id="{{ $row['_id'] }}" >Ubah</a>
                                    <a href="javascript:void(0);" class="btn btn-danger btn-sm delete" data-id="{{ $row['_id'] }}">Hapus</a>
                                </td>
                                <td>{{ empty($row['nama_penyakit']) ? '' : $row['nama_penyakit'] }}</td>
                                <td>{{ empty($row['deskripsi']) ? '' : $row['deskripsi'] }}</td>
                                <td>{{ empty($row['solusi']) ? '' : $row['solusi'] }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">Tidak ada data.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        
            <div class="modal" tabindex="-1" id="modalAdmin">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Form Jenis Penyakit</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="formAdmin" action="save.php" method="post">
                                <div class="mb-3">
                                    <label for="nama_penyakit" class="form-label">Nama Penyakit</label>
                                    <input type="text" class="form-control" id="nama_penyakit" name="nama_penyakit" placeholder="Nama Penyakit" required>
                                    <input type="hidden" id="id" name="id">
                                </div>
            
                                <div class="mb-3">
                                    <label for="deskripsi" class="form-label">Deskripsi</label>
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" required>
                                </div>
                                <div class="mb-3">
                                    <label for="solusi" class="form-label">Solusi</label>
                                    <input type="text" class="form-control" id="solusi" name="solusi" placeholder="Solusi" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success btn-sm" form="formAdmin">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="{{ asset('js/custom/scrip.js') }}"></script>
        </article>
</body>
</html>