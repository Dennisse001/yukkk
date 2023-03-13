@extends('desa.nav')

@section('isi')

<head>
    <link rel="stylesheet"
        href="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/materializeicon/material-icons.css">
    <link rel="stylesheet"
        href="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/animatecss/animate.css">
    <link rel="stylesheet"
        href="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/swiper/css/swiper.min.css">
    <link rel="stylesheet"
        href="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/footable-bootstrap/css/footable.bootstrap.min.css">
    <link rel="stylesheet"
        href="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/DataTables-1.10.18/css/responsive.dataTables.min.css">
    <link rel="stylesheet"
        href="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/jquery-jvectormap/jquery-jvectormap-2.0.3.css">
    <link id="theme" rel="stylesheet" href="" type="text/css">
    <link rel="stylesheet" href="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/assets/css/loader.css?v6.3">
    <link rel='stylesheet' type='text/css'
        href="https://sumberjaya-tanahlaut.desa.id/assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://sumberjaya-tanahlaut.desa.id/assets/css/leaflet.css" />
    <link rel="stylesheet" href="https://sumberjaya-tanahlaut.desa.id/assets/css/mapbox-gl.css" />

    <script src="https://sumberjaya-tanahlaut.desa.id/assets/js/leaflet.js"></script>
    <script src="https://sumberjaya-tanahlaut.desa.id/assets/front/js/layout.js"></script>
    <script src="https://sumberjaya-tanahlaut.desa.id/assets/js/leaflet-providers.js"></script>
    <script src="https://sumberjaya-tanahlaut.desa.id/assets/js/mapbox-gl.js"></script>
    <script src="https://sumberjaya-tanahlaut.desa.id/assets/js/leaflet-mapbox-gl.js"></script>
    <script src="https://sumberjaya-tanahlaut.desa.id/assets/js/peta.js"></script>


    <script src="https://sumberjaya-tanahlaut.desa.id/assets/front/js/jquery.cycle2.min.js"></script>
    <script src="https://sumberjaya-tanahlaut.desa.id/assets/front/js/jquery.cycle2.carousel.js"></script>
    <script src="https://sumberjaya-tanahlaut.desa.id/assets/js/jquery.validate.min.js?v1a8dc8a74a2bb8fee9bbb298385174a3">
    </script>
    <script src="https://sumberjaya-tanahlaut.desa.id/assets/js/validasi.js?v22f32785399804f4b8ee0711eaa92bdc"></script>
    <script
        src="https://sumberjaya-tanahlaut.desa.id/assets/js/localization/messages_id.js?vc36d3dbfc8e5a7d22a5601604aee8f8f">
    </script>
    <script src="https://sumberjaya-tanahlaut.desa.id/assets/js/script.js?v71f6784ede0c313afd7bd865dc7883b0"></script>


    <link rel="stylesheet"
        href="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/assets/css/bootstrap-lazy-load.css">
    <link rel="stylesheet"
        href="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/assets/css/widget.min.css?v6.3">
    <script src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/assets/js/widget.js?v6.3"></script>
    <style>
        .carousel-item {
            max-height: 700px;
        }

        .carousel-item img {
            display: block;
            margin: auto;
            width: 100%;
        }

        .text-break {
            word-break: break-word
        }
    </style>
    <script type="text/javascript">
        var csrfParam = 'sidcsrf';
        var getCsrfToken = () => document.cookie.match(new RegExp(csrfParam + '=(\\w+)'))[1]
    </script>
</head>

<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark-8"
        data-bg-img="https://i.postimg.cc/02JFzHcf/ce3a746513e5cfcec3f7fa6e88ef0b391.jpg">
        <div class="container pt-90 pb-40">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="text-white font-36">DESA KUTA</h2>
                        <ol class="breadcrumb text-left mt-10 white">
                            <li><a href="dashboard-desa.html">Beranda</a></li>
                            <li><a href="#">Profil Desa</a></li>
                            <li class="active" style="color: #fca311;">Tentang Desa</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<body class="">
    <div id="wrapper" class="clearfix">
        <section id="about">
            <div class="container pb-40">
                <div class="section-title text-center">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="text-uppercase line-bottom-center mt-0">Profil <br><span class=""
                                    style="color: #F26522">DESA KUTA</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <body class="fixed-header sidebar-right-close sidebar-left-close">

                <div class="settings-sidebar-backdrop pink-gradient" style="margin-top: -90px;"></div>

                <div class="container-fluid mt-1 main-container ">
                    <div class="row">
                        <div class="col-md-8 col-lg-8">
                            <div class="card fullscreen has-background-img ">
                                <div id="printableArea">

                                    <div class="card-body">
                                        <div class="mb-0 content-color-secondary">


                                            <h3 style="text-align: left; margin-left: 50px;">A. Biodata Desa</h3>
                                            <p
                                                style="text-align: justify; margin-left: 83px; text-indent: 3em; font-size: 17px;">
                                                Kuta adalah salah satu desa di kecamatan Belik, Pemalang, Jawa Tengah,
                                                Indonesia.</p>
                                            <p style="text-align: justify; margin-left: 83px;  font-size: 17px;">Letak
                                                geografi Desa Kuta , terletak diantara :
                                                <br>
                                                Sebelah Utara &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Desa Gunungjaya
                                                <br>
                                                Sebelah Selatan &nbsp;&nbsp;&nbsp; : kabupaten Purbalingga
                                                <br>
                                                Sebelah Barat &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Desa Gunungtiga
                                                <br>
                                                Sebelah Timur &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Desa Badak
                                            </p>
                                            <h3 style="text-align: left; margin-left: 50px;">B. Sejarah Desa</h3>
                                            <p
                                                style="text-align: justify; margin-left: 83px; text-indent: 3em; font-size: 17px;">
                                                Di Makam Ragasari di Desa Kuta Kecamatan Bantarbolang Kabupaten Pemalang
                                                terdapat makam mbah SIMPEN ialah sosok perempuan yang masyarakt setempat
                                                menyebutnya sosok perempuan tidak punya puser sebagai penghormatan
                                                kepada beliau karena dianggap orang yang sangat berjasa, pejuang yang
                                                sangat gigih melawan penjajah Belanda, maka para peziarah agar tidak
                                                melangkah/melewati diatas makamnya (jawa; dilangkahi). Pada saat itu
                                                pula nama-nama para prajurit Pangeran Diponegoro tetap dirahasiakan baik
                                                nama aslinya maupun keberadaannya. Pada tahun 1830 terjadi peperangan
                                                terakhir Prajurit Pangeran Diponegoro di daerah hutan Margalunyu Gunung
                                                Slamet. Para Prajurit Pangeran Diponegoro mengadakan perlawnan terhadp
                                                pihak kumpeni Belanda, semua serdadu yg dikirim pihak Kompeni tewas.</p>
                                            <br>
                                            <section id="about">
                                                <div class="container ml-100 pb-sm-50 " style="text-align: justify;">
                                                    <div class="row">
                                                        <div class="col-xs-12 col-md-4">
                                                            <h3 class="line-bottom border-bottom mt-0 mt-sm-20">Visi
                                                            </h3>
                                                            <div style="font-size: 15px;">
                                                                Kami ingin semua penduduk desa bisa hidup tenang,aman
                                                                dan sejahterah agar tidak ada kericuhan antar warga
                                                            </div>
                                                        </div>

                                                        <div class="col-xs-12 col-md-4">
                                                            <h3 class="line-bottom border-bottom mt-0 mt-sm-20">Misi
                                                            </h3>
                                                            <div style="font-size: 15px;">
                                                                Oleh karena itu kami memeiliki beberapa program seperti
                                                                kerja bakti,pkk, karang taruna DSBG
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                            <div class="card mt-1 bg-light-primary border border-primary no-shadow">

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="sharethis-inline-reaction-buttons"></div>


                                <div class="ml-2 mr-2">
                                    <div class="fb-comments"
                                        data-href="https://sumberjaya-tanahlaut.desa.id/artikel/2020/1/24/profil-desa-tahun-2019"
                                        width="100%" data-numposts="5"></div>
                                </div>
                            </div>



                        </div>
                        <!--  -->
                        <div class="col-md-4 col-lg-4">



                            <link type='text/css'
                                href="https://sumberjaya-tanahlaut.desa.id/assets/front/css/slider.css"
                                rel='Stylesheet' />
                            <style type="text/css">
                                #aparatur_desa .cycle-pager span {
                                    height: 10px;
                                    width: 10px;
                                }

                                .cycle-slideshow {
                                    max-height: none;
                                    margin-bottom: 0px;
                                    border: 0px;
                                }

                                .cycle-next,
                                .cycle-prev {
                                    mix-blend-mode: difference;
                                }
                            </style>
                            <!-- widget Aparatur Desa -->
                            <div class="card mb-1 z-index-1">
                                <div class="card-header border-bottom">
                                    <div class="media">
                                        <div class="media-body">
                                            <h3 class="content-color-primary mb-0">Perangkat Desa</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body text-center" style="width: 200px; margin-left: 110px;">
                                    <div id="aparatur_desa" class="cycle-slideshow" data-cycle-pause-on-hover=true
                                        data-cycle-fx=scrollHorz data-cycle-timeout=2000
                                        data-cycle-caption-plugin=caption2 data-cycle-overlay-fx-out="slideUp"
                                        data-cycle-overlay-fx-in="slideDown">
                                        <span class="cycle-prev"><img
                                                data-src="https://sumberjaya-tanahlaut.desa.id/assets/images/back_button.png"
                                                loading="lazy" class="lazyload" alt=""></span>
                                        <span class="cycle-next"><img
                                                data-src="https://sumberjaya-tanahlaut.desa.id/assets/images/next_button.png"
                                                loading="lazy" class="lazyload" alt=""></span>
                                        <div class="cycle-caption"></div>
                                        <div class="cycle-overlay"></div>
                                        <img src="https://sumberjaya-tanahlaut.desa.id/desa/upload/user_pict/6301072502870004-1787.jpeg"
                                            alt="" class="img-responsive cover"
                                            data-cycle-title="<span class='cycle-overlay-title'>NUR HOLID</span>"
                                            data-cycle-desc="Kepala Desa<br><span class='badge badge-danger'>Belum Rekam Kehadiran</span>">
                                        <img src="https://sumberjaya-tanahlaut.desa.id/desa/upload/user_pict/6301072710880002-1831.jpg"
                                            alt="" class="img-responsive cover"
                                            data-cycle-title="<span class='cycle-overlay-title'>KHAIRUDIN</span>"
                                            data-cycle-desc="Sekretaris Desa<br><span class='badge badge-success'>Hadir di Kantor Desa</span>">
                                        <img src="https://sumberjaya-tanahlaut.desa.id/desa/upload/user_pict/6301076608940002-512.jpg"
                                            alt="" class="img-responsive cover"
                                            data-cycle-title="<span class='cycle-overlay-title'>NURHAIDA</span>"
                                            data-cycle-desc="Kaur Keuangan<br><span class='badge badge-danger'>Belum Rekam Kehadiran</span>">
                                        <img src="https://sumberjaya-tanahlaut.desa.id/desa/upload/user_pict/6301075010890008-2019.jpg"
                                            alt="" class="img-responsive cover"
                                            data-cycle-title="<span class='cycle-overlay-title'>MARTINAH</span>"
                                            data-cycle-desc="Kaur Umum dan Perencanaan<br><span class='badge badge-danger'>Belum Rekam Kehadiran</span>">
                                        <img src="https://sumberjaya-tanahlaut.desa.id/desa/upload/user_pict/eko.jpg"
                                            alt="" class="img-responsive cover"
                                            data-cycle-title="<span class='cycle-overlay-title'>EKO WAHYU WIDODO</span>"
                                            data-cycle-desc="Kasi Pemerintahan<br><span class='badge badge-danger'>Belum Rekam Kehadiran</span>">
                                        <img src="https://sumberjaya-tanahlaut.desa.id/desa/upload/user_pict/6301070810780002-1277.jpg"
                                            alt="" class="img-responsive cover"
                                            data-cycle-title="<span class='cycle-overlay-title'>SUYANTO</span>"
                                            data-cycle-desc="Kasi Kesejahteraan dan Pelayanan<br><span class='badge badge-danger'>Belum Rekam Kehadiran</span>">
                                        <img src="https://sumberjaya-tanahlaut.desa.id/desa/upload/user_pict/6301070105910003-551.jpg"
                                            alt="" class="img-responsive cover"
                                            data-cycle-title="<span class='cycle-overlay-title'>AHMAD PRAYETNO</span>"
                                            data-cycle-desc="Kepala Dusun I<br><span class='badge badge-danger'>Belum Rekam Kehadiran</span>">
                                        <img src="https://sumberjaya-tanahlaut.desa.id/desa/upload/user_pict/6301071007880004-1377.jpg"
                                            alt="" class="img-responsive cover"
                                            data-cycle-title="<span class='cycle-overlay-title'>AHMAD SALIM</span>"
                                            data-cycle-desc="Kepala Dusun II<br><span class='badge badge-danger'>Belum Rekam Kehadiran</span>">
                                        <img src="https://sumberjaya-tanahlaut.desa.id/desa/upload/user_pict/3528051607930003-2953.jpg"
                                            alt="" class="img-responsive cover"
                                            data-cycle-title="<span class='cycle-overlay-title'>HASAN BASRI</span>"
                                            data-cycle-desc="Kepala Dusun III<br><span class='badge badge-danger'>Belum Rekam Kehadiran</span>">
                                        <img src="https://sumberjaya-tanahlaut.desa.id/desa/upload/user_pict/6301074605960004-1036.jpg"
                                            alt="" class="img-responsive cover"
                                            data-cycle-title="<span class='cycle-overlay-title'>HELDA SAFITRI</span>"
                                            data-cycle-desc="STAF KUR UMUM DAN PERENCANAAN<br><span class='badge badge-danger'>Belum Rekam Kehadiran</span>">
                                        <img src="https://sumberjaya-tanahlaut.desa.id/desa/upload/user_pict/6301076001970001-3388.jpg"
                                            alt="" class="img-responsive cover"
                                            data-cycle-title="<span class='cycle-overlay-title'>LISA INDRIANI</span>"
                                            data-cycle-desc="STAF KASI PEMERINTAHAN<br><span class='badge badge-danger'>Belum Rekam Kehadiran</span>">
                                    </div>
                                </div>
                            </div>

                            <style>
                                #sinergi_program {
                                    text-align: center;
                                }

                                #sinergi_program table {
                                    margin: auto;
                                }

                                #sinergi_program img {
                                    max-width: 100%;
                                    max-height: 100%;
                                    transition: all 0.5s;
                                    -o-transition: all 0.5s;
                                    -moz-transition: all 0.5s;
                                    -webkit-transition: all 0.5s;
                                }

                                #sinergi_program img:hover {
                                    transition: all 0.3s;
                                    -o-transition: all 0.3s;
                                    -moz-transition: all 0.3s;
                                    -webkit-transition: all 0.3s;
                                    transform: scale(1);
                                    -moz-transform: scale(1.5);
                                    -o-transform: scale(1.5);
                                    -webkit-transform: scale(1.5);
                                    box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.5);
                                }
                            </style>




                            <!-- widget Galeri-->
                            <style type="text/css">
                                .highcharts-xaxis-labels tspan {
                                    font-size: 8px;
                                }
                            </style>

                            <div class="card mb-1 z-index-1" style="margin-top: -90px;">
                                <div class="card-header border-bottom">
                                    <div class="media">
                                        <div class="media-body">
                                            <h3 class="content-color-primary mb-0">Lokasi Desa</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31668.027706724726!2d109.35274030377245!3d-7.183246168073183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6feffdb0412969%3A0x5027a76e3564d90!2sKuta%2C%20Kec.%20Belik%2C%20Kabupaten%20Pemalang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1676349979848!5m2!1sid!2sid"
                                        width="600" height="450" style="border:0;" allowfullscreen=""
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></style>
                                    <button class="btn btn-primary btn-block mt-1">Buka Peta</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>

    <script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>

    <style>
        #footer {
            background-color: #142850;
        }

        .backTop {
            position: fixed;
            bottom: 0;
            left: 0;
            display: inline-block;
            padding: 0.5em;
            margin: 0.5em;
        }

        .backTop:hover {
            cursor: pointer;
        }
    </style>
    <div class="backTop z-index-1"><i class="fa fa-chevron-circle-up fa-3x"></i></div>
    <script>
        $(window).on('load', function() {
            $('.backTop').hide();
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $(".backTop").fadeIn();
                } else {
                    $(".backTop").fadeOut();
                }
            });
            $('.backTop').click(function() {
                $("html, body").animate({
                    scrollTop: 0
                }, 500);
            });
        });
    </script>
    <script src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/assets/js/popper.min.js"></script>
    <script src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/bootstrap-4.1.3/js/bootstrap.min.js">
    </script>
    <script src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/cookie/jquery.cookie.js"></script>
    <script src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/sparklines/jquery.sparkline.min.js">
    </script>
    <script src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/circle-progress/circle-progress.min.js">
    </script>
    <script src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/swiper/js/swiper.min.js"></script>
    <script src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/chartjs/utils.js"></script>
    <script
        src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/DataTables-1.10.18/js/jquery.dataTables.min.js">
    </script>
    <script
        src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/DataTables-1.10.18/js/dataTables.bootstrap4.min.js">
    </script>
    <script
        src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/DataTables-1.10.18/js/dataTables.responsive.min.js">
    </script>
    <script src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/footable-bootstrap/js/footable.min.js">
    </script>
    <script
        src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/bootstrap-daterangepicker-master/moment.js">
    </script>
    <script
        src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/bootstrap-daterangepicker-master/daterangepicker.js">
    </script>
    <script src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/jquery-jvectormap/jquery-jvectormap.js">
    </script>
    <script
        src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/jquery-jvectormap/jquery-jvectormap-world-mill-en.js">
    </script>
    <script
        src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/vendor/jquery-toast-plugin-master/dist/jquery.toast.min.js">
    </script>
    <script src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/assets/js/main.js"></script>
    <script src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/assets/js/countUp.js"></script>
    <script src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/assets/js/countUp-jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://rawgit.com/toddmotto/echo/master/dist/echo.js"></script>
    <script src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/assets/js/bootstrap-lazy-load.js"></script>
    <script src="https://sumberjaya-tanahlaut.desa.id/desa/themes/denatra/assets/js/sweetalert2.all.min.js"></script>
    <script>
        "use strict";
        $(function() {
            $('[data-toggle="popover"]').popover()
        })
    </script>
    <script>
        "use strict"
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true,
                "order": [
                    [3, "desc"]
                ]
            });
        });
    </script>
    <script>
        (async () => {
            if ('loading' in HTMLImageElement.prototype) {
                const images = document.querySelectorAll("img.lazyload");
                images.forEach(img => {
                    img.src = img.dataset.src;
                });
            } else {
                const lazySizesLib = await import('/lazysizes.min.js');
                lazySizes.init(); // lazySizes works off a global.
            }
        })();
    </script>
    <script>
        'use strict';
        var mySwiper = new Swiper('.swiper-signin', {
            slidesPerView: 1,
            spaceBetween: 0,
            autoplay: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            }
        });
        $(window).on('resize', function() {
            var mySwiper = new Swiper('.swiper-signin', {
                slidesPerView: 1,
                spaceBetween: 0,
                autoplay: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                }
            });
        });
    </script>
</body>
@endsection
