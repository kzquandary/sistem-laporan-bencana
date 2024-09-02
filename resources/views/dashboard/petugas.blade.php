@extends('templates.master')
@section('content')


<div class="row">
  <div class="col-xl-3 col-sm-6 col-12 d-flex">
    <div class="dash-widget w-100">
      <div class="dash-widgetimg">
        <span><i data-feather="shield"></i></span>
      </div>
      <div class="dash-widgetcontent">
        <h5><span>{{ $lapor }}</span></h5>
        <h6>Total Laporan</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 col-12 d-flex">
    <div class="dash-widget dash1 w-100">
      <div class="dash-widgetimg">
        <span><i data-feather="shield"></i></span>
      </div>
      <div class="dash-widgetcontent">
        <h5><span>{{ $korban }}</span></h5>
        <h6>Total Korban</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 col-12 d-flex">
    <div class="dash-widget w-100">
      <div class="dash-widgetimg">
        <span><i data-feather="shield"></i></span>
      </div>
      <div class="dash-widgetcontent">
        <h5><span>{{ $luka_ringan }}</span></h5>
        <h6>Total Korban Luka Ringan</h6>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 col-12 d-flex">
    <div class="dash-widget dash1 w-100">
      <div class="dash-widgetimg">
        <span><i data-feather="shield"></i></span>
      </div>
      <div class="dash-widgetcontent">
        <h5><span>{{ $meninggal }}</span></h5>
        <h6>Total Korban Meninggal</h6>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-body d-flex flex-column gap-3 justify-content-center align-items-center">
    <div class="d-flex flex-column justify-content-center align-items-center">
      <img src="{{ asset('assets/img/logo/logo-bpbd.png') }}" alt="product" style="height: 8rem;">
    </div>
    <div class="d-flex flex-column justify-content-center align-items-center">
      <h1>Selamat Datang di Sistem Informasi Pelaporan Bencana Alam</h1>
    </div>
  </div>
</div>
@endsection