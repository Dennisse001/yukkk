@extends('desa.nav')

@section('isi')

    <body class="">
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
                                    <li class="active" style="color: #fca311;">Sarana Umum</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Section: Causes -->
            <section id="about">
                <div class="container pb-40">
                    <div class="section-title text-center">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="text-uppercase line-bottom-center mt-0">Sarana Umum <br><span class=""
                                        style="color: #F26522">DESA KUTA</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="col-12 col-sm-12">
                <select name="" id="filterSarana">
                    <option value="">--pilih--</option>
                    <option value="kesehatan">kesehatan</option>
                    <option value="balai">balai</option>
                    <option value="pendidikan">pendidikan</option>
                </select>
            </div>

          
            
            <div class="container" style="margin-top: -80px;">


                <table id="table" data-toggle="table" data-toolbar="#toolbar" data-filter-control="true"
                    data-show-footer="false" data-detail-formatter="detailFormatter" data-detail-view="true"
                    data-hide-unused-select-options="true">
                    <thead style="background-color: #fca311;">


                        <th data-field="id" data-filter-control="select" style="height: 100px;">
                            <center>Jenis</center>
                        </th>
                        <th data-field="name">
                            <center>Nama<br><br><br></center>
                        </th>
                        <th data-field="city">
                            <center>Jumlah<br><br><br></center>
                        </th>

                    </thead>
                </table>
            </div>
            <br>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://unpkg.com/bootstrap-table@1.16.0/dist/bootstrap-table.min.js"></script>
        <script
            src="https://unpkg.com/bootstrap-table@1.16.0/dist/extensions/filter-control/bootstrap-table-filter-control.min.js">
        </script>
        <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
        <script>
            var data = [{
                "id": "Balai Pertemuan",
                "name": "Balai Desa",
                "city": "1 unit",
            }, {
                "id": "Balai Pertemuan",
                "name": "Balai Dusun",
                "city": "4 unit",
            }, {
                "id": "Balai Pertemuan",
                "name": "Balai RW",
                "city": "9 unit",
            }, {
                "id": "Pendidikan",
                "name": "PAUD",
                "city": "2 unit",
            }, {
                "id": "Pendidikan",
                "name": "TK",
                "city": "1 unit",
            }, {
                "id": "Pendidikan",
                "name": "SD",
                "city": "3 unit",
            }, {
                "id": "Pendidikan",
                "name": "SMP",
                "city": "1 unit",
            }, {
                "id": "Kesehatan",
                "name": "Rumah Sakit",
                "city": "0 unit",
            }, {
                "id": "Kesehatan",
                "name": "Puskesmas",
                "city": "0 unit",
            }, {
                "id": "Kesehatan",
                "name": "Puskemas Pembantu",
                "city": "1 unit",
            }, {
                "id": "Kesehatan",
                "name": "Pos Kesehatan Desa",
                "city": "0 unit",
            }, {
                "id": "Kesehatan",
                "name": "Pos Pelayanan Terpadu (Posyandu)",
                "city": "5 unit",
            }, {
                "id": "Kesehatan",
                "name": "Pos KB",
                "city": "0 unit",
            }, {
                "id": "Kesehatan",
                "name": "Praktek Dokter",
                "city": "0 unit",
            }, {
                "id": "Kesehatan",
                "name": "Prakter Bidan",
                "city": "1 unit",
            }, ];


            $('#table').bootstrapTable({
                data: data,
                showColumns: true,
            });

            $('.fixed-table-loading').css('display', 'none')
            // $('.fixed-table-toolbar').css('display', 'none')
            
            $('.fht-cell').css('display', 'none')

            $('#filterSarana').on('change', function(){
                const filter = $(this).find(":selected").val()

                $.ajax({
					type: 'GET',
					url: `{{ route('filter.sarana') }}`,
					data: filter,
                    success: function(hasil) {
						$("#form_des").html(hasil);
						$("#form_des").show();
					}
				});
            })
            


            var sub_data = [{
                "street": "Gravy",
                "suburb": "Kew",
            }, {
                "street": "Donald",
                "suburb": "Collingwood",
            }, {
                "street": "Wells",
                "suburb": "St Kilda",
            }];



            function detailFormatter(index, row, element) {
                return childDetail(index, row)
            };


            function childDetail(index, row) {

                var row1 = document.createElement("div");
                row1.setAttribute('class', 'ui one column grid');



                row1.append(button);

                var row2 = document.createElement("div");
                row1.setAttribute('class', 'ui one column grid');

                var table = document.createElement('table');
                table.setAttribute('class', 'ui very compact table');
                table.setAttribute('id', 'sub_table');

                row2.append(table);

                row1.append(row2);

                return row1;
            };
        </script>

    </body>
@endsection
