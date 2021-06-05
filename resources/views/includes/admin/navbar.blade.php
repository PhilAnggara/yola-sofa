<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img class="img-profile rounded-circle" src="https://ui-avatars.com/api/?background=76b852&color=ffffff&bold=true&size=60&name={{ auth()->user()->name }}">
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <div class="media px-3 py-2">
          <img class="rounded-circle" height="40px" width="40px" src="https://ui-avatars.com/api/?background=76b852&color=ffffff&bold=true&size=60&name={{ auth()->user()->name }}" class="ml-3">
          <div class="media-body">
            <p class="ml-3 mb-0 font-weight-bold text-dark">{{ auth()->user()->name }}</p>
            <p class="ml-3 mb-0 text-muted">{{ auth()->user()->email }}</p>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <a href="{{ route('beranda') }}" class="dropdown-item">
          <i class="fas fa-chevron-circle-left fa-sm fa-fw mr-2 text-gray-400"></i>
          Kembali Ke Beranda
        </a>
        <form action="{{ url('logout') }}" method="POST">
          @csrf
          <button class="dropdown-item" type="submit">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Keluar
          </button>
        </form>
        {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Keluar
        </a> --}}
      </div>
    </li>

  </ul>

</nav>