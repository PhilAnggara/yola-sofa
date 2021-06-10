<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <a class="navbar-brand" href="{{ Route('beranda') }}">
    <img src="{{ url('frontend/images/logo.png') }}" class="d-inline-block align-middle" alt="" loading="lazy">
    <span class="align-middle">Yola Sofa</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <form class="form-inline my-2 my-lg-0 mr-sm-3">
        <input class="form-control form-control" type="search" placeholder="Cari..." aria-label="Search">
        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
      </form>
      @if (auth()->user() && auth()->user()->roles == 'USER')
        <a class="nav-link" href="{{ Route('cart') }}">
          <i class="fas fa-shopping-cart fa-lg"></i>
          <span class="d-sm-none nav-hiden-text">Keranjang Saya</span>

          @php
              $cartCounter = App\Models\Transaksi::where('id_user', auth()->user()->id)->where ('status', 'onCart')->first();
          @endphp
          @if ($cartCounter != NULL)
            <span class="badge badge-pill badge-danger">
              {{ $cartCounter->transaksiDetail->count() }}
            </span>
          @endif
        </a>
      @endif
      <span class="vertical-devider"></span>
      
      @guest
        <a class="btn btn-outline-primary mx-sm-3 btn-login" href="{{ url('login') }}">Masuk</i></a>
        <a class="btn btn-primary" href="{{ url('register') }}">Daftar</i></a>
      @endguest
      @auth
        <div class="btn-group">
          <div type="button" class="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="rounded-circle" height="40px" width="40px" src="https://ui-avatars.com/api/?background=df7789&color=ffffff&bold=true&size=60&name={{ auth()->user()->name }}">
          </div>
          
          <div class="dropdown-menu dropdown-menu-right mt-2">
            <div class="media px-3 py-2">
              <img class="rounded-circle" height="50px" width="50px" src="https://ui-avatars.com/api/?background=df7789&color=ffffff&bold=true&size=60&name={{ auth()->user()->name }}" class="ml-3">
              <div class="media-body">
                <h5 class="ml-3 mb-0">{{ auth()->user()->name }}</h5>
                <p class="ml-3 mb-0 text-muted">{{ auth()->user()->email }}</p>
              </div>
            </div>
            <div class="dropdown-divider"></div>
            @if (auth()->user()->roles == 'ADMIN')
              <a class="dropdown-item" href="{{ Route('admin') }}">
                <i class="fas fa-user-cog fa-sm mr-1 text-secondary"></i>
                Beranda Admin
              </a>
            @else
              <a class="dropdown-item {{ Request::is('transaksi/*') ? 'active' : '' }}" href="{{ Route('transaction') }}">
                <i class="far fa-credit-card fa-sm mr-1 {{ Request::is('transaksi/*') ? 'text-white' : 'text-secondary' }}"></i>
                Transaksi Saya
              </a>
            @endif
            <form action="{{ url('logout') }}" method="POST">
              @csrf
              <button class="dropdown-item" type="submit">
                <i class="fas fa-sign-out-alt mr-1 text-secondary"></i>
                Keluar
              </button>
            </form>
          </div>
        </div>
      @endauth

    </div>
  </div>
</nav>