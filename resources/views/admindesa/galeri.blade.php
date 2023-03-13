@extends('admindesa.navside')
@section('isi')
@include('sweetalert::alert')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Galeri</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboardadmindesa">Home</a></li>
          <li class="breadcrumb-item active">Galeri</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
   <a href="tambah_berita"><button style="margin-left: 69px;margin-bottom: 12px;" type="button" class="btn btn-primary btn-sm  ">Tambah Galeri      </button></a>

   <section class="section" >
    <div class="row align-items-top mx-auto">
      <div class="col-lg-9 d-flex flex-row">


          @foreach ($data as $row)

        <!-- Card with an image on top -->
        <div class="card me-2 col-4">

            <div class="card-body">
              <h5 class="card-title">{{ $row->judul }}</h5>
              <p class="card-text">{{ $row->tanggal }}</p>
              <div class="d-flex">
              <a href="/tampil/{{ $row->id }}" style="margin-left: 50px;" type="button" class="btn btn-primary btn-sm  ">Edit</a>
              <a href="#" data-id="{{ $row->id }}" data-nama="{{ $row->judul }}" style="margin-left: 8px;" type="button" class="btn btn-primary btn-sm delete">Hapus</a>
            </div>
            </div>
          </div><!-- End Card with an image on top -->


                  @endforeach
                              <!-- Card with an image on top -->

        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
@section('script')
    <script>
        $('.delete').click(function() {
            var galeriid = $(this).attr('data-id');
            var nama = $(this).attr('data-nama');
            swal({
                    title: "Yakin ?",
                    text: "Kamu akan menghapus galeri dengan judul " + nama + " ",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/deletegaleri/" + galeriid + ""
                        swal("Data berhasil di hapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
        })
    </script>
@endsection
