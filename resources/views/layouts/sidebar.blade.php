<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      <img src="https://upload.wikimedia.org/wikipedia/id/f/ff/Logo_UnivLampung.png" alt="Logo UNILA" style="width: 50px; height: 50px;">
    </div>
    <div class="sidebar-brand-text mx-3">SIMASET PSDKU</div>
  </a>
  
  <!-- Divider -->
  <hr class="sidebar-divider my-0">
  
  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  
  @if(auth()->user()->role === 'admin')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('asets') }}">
        <i class="fas fa-columns"></i>
        <span>Aset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('kategoris') }}">
        <i class="fas fa-th"></i>
        <span>Kategori Aset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('lokasis') }}">
        <i class="fas fa-map-marker"></i>
        <span>Lokasi Aset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('kerusakans') }}">
        <i class="fas fa-fire"></i>
        <span>Laporan Kerusakan Aset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('peminjamans') }}">
        <i class="fas fa-arrow-up"></i>
        <span>Peminjaman Aset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('perbaikans') }}">
        <i class="fas fa-wrench"></i>
        <span>Perbaikan Aset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('riwayats') }}">
        <i class="fas fa-history"></i>
        <span>Riwayat Aset</span>
      </a>
    </li>
  @endif

  @if(auth()->user()->role === 'staf_aset')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('asets') }}">
        <i class="fas fa-columns"></i>
        <span>Aset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('kerusakans.create') }}">
        <i class="fas fa-fire"></i>
        <span>Laporan Kerusakan Aset</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('peminjamans.create') }}">
        <i class="fas fa-arrow-up"></i>
        <span>Peminjaman Aset</span>
      </a>
    </li>
  @endif

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>
