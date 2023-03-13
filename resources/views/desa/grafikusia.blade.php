@extends('desa.nav')

@section('isi')

    <head>
        <style>
            #chartdiv {
                width: 100%;
                height: 500px;
                font-size: 11px;
            }
        </style>
    </head>

    <body class="">

        <!-- Section: Causes -->
        <div class="container pb-40">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase line-bottom-center mt-0">Grafik Usia <br><span class=""
                                style="color: #e9940a">DESA KUTA</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section: Causes -->

        <script src="https://www.amcharts.com/lib/3/amcharts.js" style="color:#fff"></script>
        <script src="https://www.amcharts.com/lib/3/pie.js" style="color:#fff"></script>
        <script src="https://www.amcharts.com/lib/3/themes/light.js" style="color:#fff"></script>
        <div id="chartdiv" style="margin-top: -100px;">
        <script>
            var chart = AmCharts.makeChart("chartdiv", {
                "type": "pie",
                "theme": "light",
                "dataProvider": [{
                    "country": "Balita (0-5 Tahun)",
                    "litres": 501.9
                }, {
                    "country": "Anak - Anak (5-11 Tahun)",
                    "litres": 301.9
                }, {
                    "country": "Remaja (17-25 Tahun)",
                    "litres": 201.1
                }, {
                    "country": "Dewasa (17-45 Tahun)",
                    "litres": 165.8
                }, {
                    "country": "Lansia (46-65 Tahun)",
                    "litres": 139.9
                }, {
                    "country": "Manula (65 Tahun Keatas)",
                    "litres": 128.3
                }, ],
                "valueField": "litres",
                "titleField": "country",
                "balloon": {
                    "fixedPosition": true
                },
                "export": {
                    "enabled": true
                }
            });
        </script>
                </div>
    @endsection
