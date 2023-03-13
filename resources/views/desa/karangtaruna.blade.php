@extends('desa.nav')

@section('isi')

<body class="">
    <div id="wrapper" class="clearfix">
        <!-- image header -->
        <style>
            .content-table {
                border-collapse: collapse;
                margin: 25px 0;
                font-size: 0.9em;
                min-width: 1000px;
                border-radius: 5px 5px 0 0;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(218, 208, 208, 0.704);
            }

            .content-table th,
            .content-table td {
                padding: 10px 10px;
            }

            .content-table tbody tr.active-row {
                font-weight: bold;
                color: #149DBB;
                ;
            }
        </style>
        <section class="inner-header divider layer-overlay overlay-dark-8"
            data-bg-img="https://i.postimg.cc/MH9qtfm6/Andika-Hazrumy-Karang-Taruna-Banten-Ubah-Imej-dari-Hanya-Organisasi-17-an.png">
            <div class="container pt-200 pb-40">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-6">
                            <h1 class="text-white font-45">Karang Taruna</h1>
                            <ol class="breadcrumb text-left mt-10 white">
                                <li><a href="dashboard-desa.html">Beranda</a></li>
                                <li><a href="#">Organisasi</a></li>
                                <li class="active" style="color: #fca311;">Karang Taruna</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Causes -->
        <div style="margin-bottom: 20px;">
            <div class="container">
                <center>
                    <img src="https://i.postimg.cc/XYcGcrSh/Lambang-KT-removebg-preview.png"
                        style="width: 180px; margin-top: 20px;">
                    <h3 class="display-5">Struktur Karang Taruna</h3>
                    <h2 class="display-6" style="color: #F26522; margin-bottom: 10px;">Nama Desa</h2>
                    <table class=" table-hover mt-3 content-table">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 10px;">No.</th>
                                <th scope="col" style="text-align: center;">Photo</th>
                                <th scope="col" style="text-align: center;">Nama</th>
                                <th scope="col" style="text-align: center;">Jabatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <center><img style="width: 200px;height: 120px;" src="images/gallery/monyet.webp"
                                            alt=""></center>
                                </td>
                                <td>
                                    <center>Sumarno</center>
                                </td>
                                <td>
                                    <center>Ketua Karang Tarnuna</center>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>
                                    <center><img style="width: 200px;height: 120px;" src="images/gallery/monyet.webp"
                                            alt=""></center>
                                </td>
                                <td>
                                    <center> Thornton</center>
                                </td>
                                <td>
                                    <center> Wakil Karang Tarnuna</center>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>
                                    <center><img style="width: 200px;height: 120px;" src="images/gallery/monyet.webp"
                                            alt=""></center>
                                </td>
                                <td>
                                    <center> Farida </center>
                                </td>
                                <td>
                                    <center> Sekretaris Karang Tarnuna </center>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>
                                    <center><img style="width: 200px;height: 120px;" src="images/gallery/monyet.webp"
                                            alt=""></center>
                                </td>
                                <td>
                                    <center> Raisa </center>
                                </td>
                                <td>
                                    <center> Bendahara Karang Tarnuna </center>
                                </td>
                            </tr>
                            <tr style="justify-content: center;">
                                <th scope="row">5</th>
                                <td>
                                    <center><img style="width: 200px;height: 120px;" src="images/gallery/monyet.webp"
                                            alt=""></center>
                                </td>
                                <td>
                                    <center> Putri </center>
                                </td>
                                <td>
                                    <center> Anggota </center>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </center>
            </div>
        </div>
        <!--END Section: Causes -->
@endsection
