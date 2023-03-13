<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from kodesolution.com/html/2017/helpingpro-html/demo/index-mp-layout2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 08:54:06 GMT -->

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="HelpingPro - Nonprofit, Crowdfunding & Charity HTML5 Template" />
    <meta name="keywords" content="charity,crowdfunding,nonprofit,orphan,Poor,funding,fundrising,ngo,children" />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>DESA.COM</title>

    <!-- Favicon and Touch Icons -->
    <link href="https://i.postimg.cc/wj308LVk/images.png" rel="shortcut icon" type="image/png">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/css-plugin-collections.css" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="css/style-main.css" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" />
    <link href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css" />
    <link href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css" />

    <!-- CSS | Theme Color -->
    <link href="css/colors/theme-skin-orange.css" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


<![endif]-->

</head>

<body class="">
    <div id="wrapper" class="clearfix">
        <!-- preloader -->
        {{-- <div id="preloader">
            <div id="spinner">
                <img class="floating" src="https://i.postimg.cc/wj308LVk/images.png" alt="">
                <h5 class="line-height-50 font-18 ml-15">Loading <b>Desa.COM</b></h5>
            </div>
            <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
        </div> --}}
        <!-- Header -->
        <header class="header">
            <div class="header-nav">
                    <div class="header-nav-wrapper navbar-scrolltofixed" style="background-color: #fca311 ;">
                        <div class="container">
                            <nav id="menuzord" class="menuzord default" style="background-color: #fca311 ;">
                            <img src="" style="width: 5%; height:6%; margin-left:-850px; margin-top:5px; margin-bottom:5px;">
                        <ul class="menuzord-menu">
                                <li style="margin-left: -60px;"><button style="background-color: #fca311 ;border: #fca311; cursor: default;"></button></li>
                                <li><a class="nav-link {{ Request::is('dashdesa')? '' : 'collapsed' }} "href="{{ route('dashdesa') }}" style="margin-left: 70px;">Beranda</a>
                                    <ul class="">
                                        <ul class="">
                                        </ul>
                                </li>
                            </ul>
                            </li>
                            <li><a class="nav-link {{ Request::is('tentangdesa') && Request::is('pemerintahdesa') ? '' : 'collapsed' }} " data-bs-target="#forms-nav" href="#">Profil Desa &ensp;</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('tentangdesa') }}">Tentang Desa</a></li>
                                    <li><a href="{{ route('pemerintahdesa') }}">Struktur Pemerintah Desa</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link {{ Request::is('karangtaruna') && Request::is('pkk')? '' : 'collapsed' }} " data-bs-target="#forms-nav"href="#">Organisasi &ensp;</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('karangtaruna') }}">Karang Taruna</a></li>
                                    <li><a href="{{ route('pkk') }}">PKK</a></li>
                                </ul>
                            <li><a href="#">Data &ensp;</a>
                                <ul class="dropdown">
                                    <li><a class="nav-link {{ Request::is('grafikusia') && Request::is('grafikkelamin') && Request::is('grafikagama')&& Request::is('grafikpendidikan')&& Request::is('grafikperkawinan')? '' : 'collapsed' }} " data-bs-target="#forms-nav"href="#">Dinamika Penduduk</a>
                                        <ul class="dropdown">
                                            <li><a href="{{ route('grafikusia') }}">Grafik Usia & Yang Masih Hidup </a></li>
                                            <li><a href="{{ route('grafikkelamin') }}">Grafik Jenis Kelamin</a></li>
                                            <li><a href="{{ route('grafikagama') }}">Grafik Agama</a></li>
                                            <li><a href="{{ route('grafikpendidikan') }}">Grafik Pendidikan Terakhir</a></li>
                                            <li><a href="{{ route('grafikperkawinan') }}">Grafik Perkawinan</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="nav-link {{ Request::is('saranaumum') ? '' : 'collapsed' }}" href="{{ route('saranaumum') }}">Sarana Umum</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="nav-link {{ Request::is('peraturandesa') ? '' : 'collapsed' }}" href="{{ route('peraturandesa') }}">Peraturan Desa</a></li>
                            <li><a class="nav-link {{ Request::is('umkmdesa') && Request::is('pariwisatadesa') ? '' : 'collapsed' }} " data-bs-target="#forms-nav" href="#">Potensi Desa &ensp;</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('umkmdesa') }}">UMKM</a></li>
                                    <li><a href="{{ route('pariwisatadesa') }}">Pariwisata</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link {{ Request::is('beritadesa') && Request::is('penghargaandesa') && Request::is('galeridesa')? '' : 'collapsed' }} " data-bs-target="#forms-nav"href="#">Berita &ensp;</a>
                                <ul class="dropdown">
                                    <li><a href="{{ route('beritadesa') }}">Berita</a></li>
                                    <li><a href="{{ route('penghargaandesa') }}">Penghargaan</a></li>
                                    <li><a href="{{ route('galeridesa') }}">Galeri</a></li>
                                </ul>
                            </li>
                            </ul>
                            <div class="pull-right flip hidden-sm hidden-xs mt-20 pt-5">
                                <a class="btn" href="{{ route('dashweb') }}" style="background-color:#F26522; color:#fff; border-radius: 10px; margin-left: 90%;"><b>Kembali</b></a>
                               </div>
                               <div class="pull-right flip hidden-sm hidden-xs mt-20 pt-5" style="margin-right: -80px;">
                                <a class="btn" href="{{ route('dashboard') }}" style="background-color:#F26522; color:#fff; border-radius: 10px;"><b>Kelola Desa</b></a>
                              </div>
                            <div class="pull-right flip hidden-sm hidden-xs mt-20 pt-5" style="margin-right: -0px;">
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

    @yield('isi')

    <footer  id="footer" class="footer divider">
        <div  class="footer-top layer-overlay overlay-dark-8">
            <div class="container pt-60 pb-30">
                <div class="row">
                    <div class="col-md-12">
                        <div class="horizontal-contact-widget mt-30 pt-30 text-center">
                            <div class="col-sm-12 col-sm-3">
                                <div class="each-widget"> <img src="https://i.postimg.cc/hG5nVkNm/sign-up-3.png">
                                    <h5 class="text-white">Registrasi</h5>
                                    <p>Admin memasukkan data sesuai ketentuan</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-sm-3 mt-sm-50">
                                <div class="each-widget"> <img src="https://i.postimg.cc/bwM8nX7t/id-1.png">
                                    <h5 class="text-white">Verifikasi</h5>
                                    <p>Menunggu persetujuan dari admin website</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-sm-3 mt-sm-50">
                                <div class="each-widget"> <img src="https://i.postimg.cc/9XTp5GX5/login.png">
                                    <h5 class="text-white">Login</h5>
                                    <p>Login dengan memasukkan email dan password</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-sm-3 mt-sm-50">
                                <div class="each-widget"> <img src="https://i.postimg.cc/Jzy0vQmj/complete.png">
                                    <h5 class="text-white">Selesai</h5>
                                    <p>Selamat admin sudah bisa mengelola akun desa tersebut</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul
                            class="list-inline styled-icons icon-hover-theme-colored icon-gray icon-circled text-center mt-30 mb-10">
                            <li><a href="#"><i class="fa fa-google-plus"></i></a> </li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-20" style="background-color: #e9940a;">
            <div class="row text-center">
                <div class="col-md-12">
                    <p class="text-white font-11 m-0">Copyright &copy;2023 Desa.com</p>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js">
</script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>

<!-- Mirrored from kodesolution.com/html/2017/helpingpro-html/demo/index-mp-layout2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 08:58:55 GMT -->

</html>
