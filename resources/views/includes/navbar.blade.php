<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <a class="navbar-brand" href="index.html">
    <img src="frontend/images/logo.png" class="d-inline-block align-middle" alt="" loading="lazy">
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
      <a class="nav-link" href="keranjang.html">
        <i class="fas fa-shopping-cart fa-lg"></i>
        <span class="d-sm-none nav-hiden-text">Keranjang Saya</span>
      </a>
      <span class="vertical-devider"></span>
      
      @guest
        <a class="btn btn-outline-primary mx-sm-3 btn-login" href="{{ url('login') }}">Masuk</i></a>
        <a class="btn btn-primary" href="{{ url('register') }}">Daftar</i></a>
      @endguest

    </div>
  </div>
</nav>