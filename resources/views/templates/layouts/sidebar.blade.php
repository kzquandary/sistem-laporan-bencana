<div class="sidebar" id="sidebar">
  <div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
      <ul>
        <li class="submenu-open">
          <h6 class="submenu-hdr">Main</h6>
          <ul>
            <li>
              @if(auth()->user()->role=='warga')
              <a href="/dashboard"><i data-feather="grid"></i><span>Dashboard</span></a>
              @endif
              @if(auth()->user()->role=='petugas')
              <a href="/dashboard_petugas"><i data-feather="grid"></i><span>Dashboard</span></a>
              @endif
              @if(auth()->user()->role=='admin')
              <a href="/dashboard_admin"><i data-feather="grid"></i><span>Dashboard</span></a>
              @endif
            </li>
          </ul>
        </li>
        <li class="submenu-open">
          <h6 class="submenu-hdr">Menu</h6>
          <ul>
            <li><a href="/pelaporan"><i data-feather="flag"></i><span>Pelaporan</span></a></li>
            @if(auth()->user()->role=='petugas')
            <li><a href="/rekap_laporan"><i data-feather="calendar"></i><span>Rekap Laporan</span></a></li>
            @endif
            @if(auth()->user()->role=='warga')
            <li><a href="/pelaporan/{{ Auth::user()->id_user }}"><i data-feather="flag"></i><span>Histori Laporan</span></a></li>
            @endif
            @if(auth()->user()->role=='admin')
            <li><a href="/kategori_bencana"><i data-feather="shield"></i><span>Kategori Bencana</span></a></li>
            <li><a href="/bencana"><i data-feather="shield"></i><span>Bencana</span></a></li>
            <li><a href="/provinsi"><i data-feather="map-pin"></i><span>Provinsi</span></a></li>
            <li><a href="/kota"><i data-feather="map-pin"></i><span>Kota</span></a></li>
            <li><a href="/kecamatan"><i data-feather="map-pin"></i><span>Kecamatan</span></a></li>
            @endif
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>