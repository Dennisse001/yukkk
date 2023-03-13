@extends('admindesa.navside')
@section('isi')
<main id="main" class="main">
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboardadmindesa">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section dashboard">
      <!-- BEGIN -->

      <!-- satu baris -->
      <div class="udin d-flex flex-row">


        <!-- Revenue Card -->
        <div class="col-xxl-1 col-md-4 me-3">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <div class="d-flex align-items-center">
                <div
                  class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                >
                <span
                id="boot-icon"
                class="bi bi-diagram-3-fill"
                style="font-size: 42px"
              ></span>
                </div>
                 <div class="ps-3">
                   <a href="struktur-pkk.html"> <h6>Struktur PKK</h6> </a>
                   <h3>{{ $jumlah_pkk }}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Revenue Card -->






        <!-- Penghargaan -->
        <div class="col-xxl-1 col-md-4 me-3">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <div class="d-flex align-items-center">
                <div
                  class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                >
                  <span
                    id="boot-icon"
                    class="bi bi-diagram-3-fill"
                    style="font-size: 42px"
                  ></span>
                </div>
                 <div class="ps-3">
                 <a href="struktur-desa.html"><h6>Struktur Desa</h6></a>
                 <h3>{{ $jumlah_struktur }}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Penghargaan -->
<!-- Revenue Card -->
<div class="col-xxl-1 col-md-4 me-3">
<div class="card info-card revenue-card">
  <div class="card-body">
    <h5 class="card-title"></h5>

    <div class="d-flex align-items-center">
      <div
        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
      >
        <span
          id="boot-icon"
          class="bi bi-diagram-3-fill"
          style="font-size: 42px"
        ></span>
      </div>
       <div class="ps-3">
         <a href="struktur-karang.html"> <h6>Karang-Taruna</h6> </a>
         <h3>{{ $jumlah_kt }}</h3>
      </div>
    </div>
  </div>
</div>
</div>
<!-- End Revenue Card -->

        <!-- End Sarana umum -->
      </div>
      <!-- end satu baris -->

      <!-- satu baris -->
      <div class="udin d-flex flex-row">
                  <!-- Sarana umum -->
                  <div class="col-xxl-1 col-md-4  me-3">
                    <div class="card info-card revenue-card">
                      <div class="card-body">
                        <h5 class="card-title"></h5>

                        <div class="d-flex align-items-center">
                          <div
                            class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                          >
                            <span
                              id="boot-icon"
                              class="bi bi-globe"
                              style="font-size: 42px"
                            ></span>
                          </div>
                           <div class="ps-3">
                             <a href="sarana-umum.html"> <h6>Sarana</h6> </a>
                             <h3>{{ $jumlah_sarana }}</h3>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
        <!-- Penghargaan -->
        <div class="col-xxl-1 col-md-4 me-3">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title"></h5>

              <div class="d-flex align-items-center">
                <div
                  class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                >
                  <span
                    id="boot-icon"
                    class="bi bi-person"
                    style="font-size: 42px"
                  ></span>
                </div>
                 <div class="ps-3">
                   <a href="data-penduduk.html"> <h6>Data Penduduk</h6> </a>
                   <h3>{{ $jumlah_penduduk }}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Penghargaan -->


        <!-- Sarana umum -->
        <div class="col-xxl-1 col-md-4">
          <div class="card info-card revenue-card">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <div class="d-flex align-items-center">
                <div
                class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                >
                <span
                id="boot-icon"
                class="bi bi-cart-fill"
                style="font-size: 42px"
                ></span>
              </div>
              <div class="ps-3">
                <a href="umkm.html"> <h6>UMKM</h6> </a>
                <h3>{{ $jumlah_product }}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Sarana umum -->

      </div>
      <!-- end satu baris -->

      <!-- satu baris -->
      <div class="udin d-flex flex-row">





<!-- Sarana umum -->
<div class="col-xxl-1 col-md-4 me-3">
<div class="card info-card revenue-card">
  <div class="card-body">
    <h5 class="card-title"></h5>

    <div class="d-flex align-items-center">
      <div
        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
      >
        <i class="bi bi-currency-dollar"></i>
      </div>
       <div class="ps-3">
        <a href="berita.html"> <h6>Berita Desa</h6></a>
        <h3>{{ $jumlah_berita }}</h3>
      </div>
    </div>
  </div>
</div>
</div>
<!-- End Sarana umum -->


<!-- profil desa -->
<div class="col-xxl-1 col-md-4 me-3">

<div class="card info-card revenue-card">
  <div class="card-body">
 <h5 class="card-title"></h5>

    <div class="d-flex align-items-center">
      <div
        class="card-icon rounded-circle d-flex align-items-center justify-content-center"
      >
        <span
          id="boot-icon"
          class="bi bi-house-fill"
          style="font-size: 42px"
        ></span>
      </div>
      <div class="ps-3">
       <a href="peraturan.html"> <h6>Peraturan Desa</h6></a>
       <h3>{{ $jumlah_peraturan }}</h3>
      </div>
    </div>
  </div>
</div>
</div>
<!-- End profil desa -->

<!-- chart -->

      </div>
      <!-- end satu baris -->

      <!-- enn begis -->
    </section>
    <style>body {
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

#chartdiv {
  width: 100%;
  height: 400px;
  background-color: #fff;
}</style>
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<div id="chartdiv" ></div>
<script>
  /**
 * ---------------------------------------
 * This demo was created using amCharts 4.
 * 
 * For more information visit:
 * https://www.amcharts.com/
 * 
 * Documentation is available at:
 * https://www.amcharts.com/docs/v4/
 * ---------------------------------------
 */

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

/**
 * Source data
 */
var data = [{
  "category": "Jenis Kelamin",
  "value": {{$jk}},
  "color": am4core.color("#c00000"),
  "breakdown": [{
    "category": "Perempuan",
    "value": {{$perempuan}}
  }, {
    "category": "Laki-Laki",
    "value": {{$laki}}
  }]
}, {
  "category": "Agama",
  "value": {{$agama}},
  "color": am4core.color("#ffc000"),
  "breakdown": [{
    "category": "Islam",
    "value": {{$islam}}
  }, {
    "category": "Kristen Protestan",
    "value": {{$kristen}}
  }, {
    "category": "Kristen Katolik",
    "value": {{$katolik}}
  }, {
    "category": "Hindu",
    "value": {{$hindu}}
  },{
    "category": "Budha",
    "value": {{$budha}}
  },{
    "category": "Konghucu",
    "value": {{$konghucu}}
  }]
}, {
  "category": "Usia",
  "value": {{$usia}},
  "color": am4core.color("#f8682c"),
  "breakdown": [{
    "category": "Balita (0-5 Tahun)",
    "value": {{$balita}}
  }, {
    "category": "Anak - Anak (6-15 Tahun)",
    "value": {{$anak}}
  }, {
    "category": "Remaja (16-25 Tahun)",
    "value": {{$remaja}}
  }, {
    "category": "Dewasa (26-45 Tahun)",
    "value": {{$dewasa}}
  }, {
    "category": "Lansia (46-100 Tahun)",
    "value": {{$lansia}}
  }]
}, {
  "category": "Pendidikan",
  "value": {{$pendidikan}},
  "color": am4core.color("#91c300"),
  "breakdown": [{
    "category": "SD",
    "value": {{$sd}}
  }, {
    "category": "SMP",
    "value": {{$smp}}
  }, {
    "category": "SMA/SMK",
    "value": {{$sma}}
  }, {
    "category": "D3",
    "value": {{$d3}}
  }, {
    "category": "D4",
    "value": {{$d4}}
  }, {
    "category": "S2",
    "value": {{$s2}}
  }]
},{
  "category": "Status",
  "value": {{$status}},
  "color": am4core.color("#4472c4"),
  "breakdown": [{
    "category": "Sudah Menikah",
    "value": {{$sudah}}
  }, {
    "category": "Belum Menikah",
    "value": {{$belum}}
  }]
}]

/**
 * Chart container
 */

// Create chart instance
var chart = am4core.create("chartdiv", am4core.Container);
chart.width = am4core.percent(100);
chart.height = am4core.percent(100);
chart.layout = "horizontal";


/**
 * Column chart
 */

// Create chart instance
var columnChart = chart.createChild(am4charts.XYChart);

// Create axes
var categoryAxis = columnChart.yAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "category";
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.inversed = true;

var valueAxis = columnChart.xAxes.push(new am4charts.ValueAxis());

// Create series
var columnSeries = columnChart.series.push(new am4charts.ColumnSeries());
columnSeries.dataFields.valueX = "value";
columnSeries.dataFields.categoryY = "category";
columnSeries.columns.template.strokeWidth = 0;

/**
 * Pie chart
 */

// Create chart instance
var pieChart = chart.createChild(am4charts.PieChart);
pieChart.data = data;
pieChart.innerRadius = am4core.percent(50);

// Add and configure Series
var pieSeries = pieChart.series.push(new am4charts.PieSeries());
pieSeries.dataFields.value = "value";
pieSeries.dataFields.category = "category";
pieSeries.slices.template.propertyFields.fill = "color";
pieSeries.labels.template.disabled = true;

// Set up labels
var label1 = pieChart.seriesContainer.createChild(am4core.Label);
label1.text = "";
label1.horizontalCenter = "middle";
label1.fontSize = 35;
label1.fontWeight = 600;
label1.dy = -30;

var label2 = pieChart.seriesContainer.createChild(am4core.Label);
label2.text = "";
label2.horizontalCenter = "middle";
label2.fontSize = 12;
label2.dy = 20;

// Auto-select first slice on load
pieChart.events.on("ready", function(ev) {
  pieSeries.slices.getIndex(0).isActive = true;
});

// Set up toggling events
pieSeries.slices.template.events.on("toggled", function(ev) {
  if (ev.target.isActive) {
    
    // Untoggle other slices
    pieSeries.slices.each(function(slice) {
      if (slice != ev.target) {
        slice.isActive = false;
      }
    });
    
    // Update column chart
    columnSeries.appeared = false;
    columnChart.data = ev.target.dataItem.dataContext.breakdown;
    columnSeries.fill = ev.target.fill;
    columnSeries.reinit();
    
    // Update labels
    label1.text = pieChart.numberFormatter.format(ev.target.dataItem.values.value.percent, "#.'%'");
    label1.fill = ev.target.fill;
    
    label2.text = ev.target.dataItem.category;
  }
});
// Enable export
chart.exporting.menu = new am4core.ExportMenu();

</script>

  </main>

@endsection
