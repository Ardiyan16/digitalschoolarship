<?php
require 'function.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penyelenggara</title>
    <link rel="icon" href="img/icon.png" type="image/png">

    <link rel="stylesheet" href="template/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="template/vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="template/vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="template/vendors/linericon/style.css">
    <link rel="stylesheet" href="template/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="template/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="template/css/magnific-popup.css">
    <link rel="stylesheet" href="template/vendors/flat-icon/font/flaticon.css">

    <link rel="stylesheet" href="template/css/style.css">
</head>

<body>

    <!--================ Header Menu Area start =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container box_1620">
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/icon.png" width="100" height="80" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-end">
                            <li class="nav-item"><a class="nav-link" href="beranda.php">Beranda</a></li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pelatihan</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="event-schedule.html">Vocational School Graduate Academy (VSGA)</a>
                                    <li class="nav-item"><a class="nav-link" href="event-gallery.html">Fresh Graduate Academy (FGA)</a>
                                    <li class="nav-item"><a class="nav-link" href="price.html">Coding Teacher Academy(CTA)</a>
                                    <li class="nav-item"><a class="nav-link" href="price.html">Online Academy (OA)</a>
                                </ul>
                            </li>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pusat Informasi</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="event-schedule.html">Panduan Tes Subtansi</a>
                                    <li class="nav-item"><a class="nav-link" href="event-gallery.html">Hak dan Kewajiban</a>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="about.php">Tentang Kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="beranda.php">Penyelenggara</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Rilis Media</a></li>
                            <li class="nav-item"><a class="nav-link" href="beranda.php">FAQ</a></li>
                            <li class="nav-item"><a class="nav-link" href="beranda.php">Kontak</a></li>
                            <li class="nav-item submenu dropdown ml-5">
                                <a href="#" class="nav-link dropdown-toggle" style="font-weight:bold; font-family: Arial" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LOGIN</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="Login/login.php">Login Peserta</a></li>
                                    <li class="nav-item"><a class="nav-link" href="Login/registrasi.php">Daftar Akun</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <div class="wrapper mb-5">
        <section class="penyelenggara">
            <div class="container">
                <div class="text mt-5" style="margin-bottom: 10%;">
                    <h2>Penyelenggara Pelatihan</h2>
                </div>
                <?php

                global $mysqli;
                $jumlahdataperhalaman = 5;
                $data = mysqli_query($koneksi, "SELECT * FROM perti order by id desc");
                $jumlahdata = mysqli_num_rows($data);
                $jumlahhalaman = ceil($jumlahdata / $jumlahdataperhalaman);
                $halamanaktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
                $awaldata = ($jumlahdataperhalaman * $halamanaktif) - $jumlahdataperhalaman;

                $perti = mysqli_query($koneksi, "SELECT * FROM perti order by id desc limit $awaldata, $jumlahdataperhalaman "); ?>
                <div class="row">
                    <?php while ($res = mysqli_fetch_array($perti)) { ?>
                        <div class="col-md-4">
                            <div class="card-blog mb-4" style="height:300px; width: 300px;">
                                <img class="img-center" style="margin-left: 35%;" src="admin/input/uploads/<?php echo $res['images'] ?>" width="100" height="100" alt="">
                                <div class="blog-body">
                                    <a href="<?php echo $res['alamat_website'] ?>">
                                        <h5 class="text-center"><br class="d-none d-xl-block"><?php echo $res['nama_perti'] ?></h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
        </section>
    </div>


    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Alamat</h6>
                        <p>Kementerian Komunikasi dan Informatika RI
                            Jl. Medan Merdeka Barat No. 9
                            Jakarta Pusat, 10110 </p>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Link Eksternal</h6>
                        <a href="">Kementerian Kominfo</a>
                        <br />
                        <a href="">Litbang SDM Kominfo</a>
                        <br />
                        <a href="">Pusbang Proserti.</a>
                    </div>
                </div>
                <div class="col-lg-3  col-md-6 col-sm-6">
                    <div class="single-footer-widget mail-chimp">
                        <ul class="instafeed d-flex flex-wrap">
                            <li><img src="img/instagram/i1.jpg" alt=""></li>
                            <li><img src="img/instagram/i2.jpg" alt=""></li>
                            <li><img src="img/instagram/i3.jpg" alt=""></li>
                            <li><img src="img/instagram/i4.jpg" alt=""></li>
                            <li><img src="img/instagram/i5.jpg" alt=""></li>
                            <li><img src="img/instagram/i6.jpg" alt=""></li>
                            <li><img src="img/instagram/i7.jpg" alt=""></li>
                            <li><img src="img/instagram/i8.jpg" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> Kementrian Komunikasi dan Informatika<i class="" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Bawik Ardiyan Ramadhan</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                    <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-dribbble"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="template/vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="template/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="template/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="template/vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
    <script src="template/js/jquery.ajaxchimp.min.js"></script>
    <script src="template/js/mail-script.js"></script>
    <script src="template/js/countdown.js"></script>
    <script src="template/js/jquery.magnific-popup.min.js"></script>
    <script src="template/js/main.js"></script>



</body>

</html>