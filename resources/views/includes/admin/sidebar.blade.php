<ul class="navbar-nav bg-gradient-prim sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ Route('beranda') }}">
    <div class="sidebar-brand-icon">
    </div>
    <div class="sidebar-brand-text">Yola Sofa | Admin</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <li class="nav-item {{ Request::is('admin') ? 'active' : '' }}">
    <a class="nav-link" href="{{ Route('admin') }}">
      <i class="fas fa-fw fa-chart-bar"></i>
      <span>Beranda</span>
    </a>
  </li>
  <li class="nav-item {{ Request::is('admin/produk*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ Route('produk.index') }}">
      <i class="fas fa-fw fa-couch"></i>
      <span>Produk</span>
    </a>
  </li>
  <li class="nav-item {{ Request::is('admin/transaksi*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ Route('transaksi.index') }}">
      <i class="fas fa-fw fa-credit-card"></i>
      <span>Transaksi</span>
    </a>
  </li>
</ul>