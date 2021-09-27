@extends('./layouts.admin')

@section('content')
<?php
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>   'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
} ?>
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Data Fasilitas</h4>
    </div>
    <!-- <div class="d-flex align-items-center flex-wrap text-nowrap">
    <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex" id="dashboardDate">
      <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>
      <input type="text" class="form-control">
    </div>
    <button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">
      <i class="btn-icon-prepend" data-feather="download"></i>
      Import
    </button>
    <button type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">
      <i class="btn-icon-prepend" data-feather="printer"></i>
      Print
    </button>
    <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
      <i class="btn-icon-prepend" data-feather="download-cloud"></i>
      Download Report
    </button>
  </div> -->
</div>

<div class="row">
    <div class="col-12 col-xl-12 grid-margin stretch-card">
        <div class="card overflow-hidden">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">
                    <h6 class="card-title mb-0">Tabel Data Fasilitas</h6>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                    </div>
                </div>
                <div class="row justify-content-center align-items-start mb-2">
                    <div class="col-md-12">
                        @foreach($fasilitas as $p)
                        <form action="/admin/update_fasilitas" enctype="multipart/form-data" method="post">
                            @csrf
                            <input type="hidden" name="id_fasilitas" value="{{ $p->id_fasilitas }}" class="form-control" id="">
                            <div class="form-group">
                                <label for="">Nama Fasilitas</label>
                                <input type="text" name="nama_fasilitas" value="{{ $p->nama_fasilitas }}" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Harga Fasilitas</label>
                                <input type="text" name="harga_fasilitas" value="{{ $p->harga_fasilitas }}" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi Fasilitas</label>
                                <input type="text" name="deskripsi_fasilitas" value="{{ $p->deskripsi_fasilitas }}" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Gambar Fasilitas</label>
                                <input type="hidden" name="old_gambar" value="{{ $p->gambar_fasilitas }}" class="form-control" id="">
                                <input type="file" name="gambar_fasilitas" value="{{ $p->gambar_fasilitas }}" class="form-control" id="">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </form>
                        @endforeach
                    </div>
                </div>
                <div class="flot-wrapper">
                    <!-- <div id="flotChart1" class="flot-chart"></div> -->
                </div>
            </div>
        </div>
    </div>
</div> <!-- row -->

@endsection