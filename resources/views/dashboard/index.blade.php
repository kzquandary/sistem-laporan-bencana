@extends('templates.master')
@section('content')

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

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Informasi</h5>
    <p>Halo, {{ Auth::user()->nama }} Selamat Datang</p>
    <p>Apabila disekitar linkunganmu saat ini sedang terjadi bencana alam</p>
    <p>Segera laporkan kepada kami di : <a href="/pelaporan/{{ Auth::user()->id_user }}" class="btn btn-danger rounded-pill"> Laporkan!
      </a></p>
    <p>Lihat juga update bencana alam di : <a href="/pelaporan" class="btn btn-warning rounded-pill">
        Posko Laporan
      </a></p>
    <br>
    <p>Salam Kami! Petugas Penanganan Laporan Bencana Alam Bandung Barat</p>
  </div>
</div>

@endsection