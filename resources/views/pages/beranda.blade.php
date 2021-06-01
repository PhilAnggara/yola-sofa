@extends('layouts.app')
@section('title', 'Yola Sofa')

@section('content')
<!-- Jumbotron -->
<div class="jumbotron text-white">
  <div class="container">
    <h1 class="display-4">Sofa Berkualitas</h1>
    <p class="lead">"Kepuasan pelanggan adalah kepuasan kami"</p>
    <a class="btn btn-primary btn-lg px-sm-4" href="{{ Route('products') }}" role="button">Produk</a>
  </div>
</div>

<!-- Favorite -->
<div class="product">
  <div class="container">
    <div class="row favorite justify-content-center">
      <div class="col-sm-3 col-6">
        <div class="card shadow">
          <img src="{{ url('frontend/images/sofa1.jpg') }}" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title product-name">Sofa Mantap 1</h5>
            <div class="normal-price">
              <strike>
                <span>Rp 12.000.000<span>
              </strike>
            </div>
            <p class="card-text price">Rp 10.000.000</p>
            <div class="variant">
              <i class="fas fa-circle warna1"></i>
              <i class="fas fa-circle warna2"></i>
              <i class="fas fa-circle warna5"></i>
            </div>
            <a href="{{ Route('detail') }}" class="stretched-link"></a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-6">
        <div class="card shadow">
          <img src="{{ url('frontend/images/sofa2.jpg') }}" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title product-name">Sofa Mantap 2</h5>
            <div class="normal-price">
              <strike>
                <span>Rp 12.000.000<span>
              </strike>
            </div>
            <p class="card-text price">Rp 10.000.000</p>
            <div class="variant">
              <i class="fas fa-circle warna2"></i>
              <i class="fas fa-circle warna3"></i>
            </div>
            <a href="{{ Route('detail') }}" class="stretched-link"></a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-6">
        <div class="card shadow">
          <img src="{{ url('frontend/images/sofa3.jpg') }}" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title product-name">Sofa Mantap 3</h5>
            <div class="normal-price">
              <strike>
                <span>Rp 12.000.000<span>
              </strike>
            </div>
            <p class="card-text price">Rp 10.000.000</p>
            <div class="variant">
              <i class="fas fa-circle warna3"></i>
              <i class="fas fa-circle warna1"></i>
              <i class="fas fa-circle warna5"></i>
            </div>
            <a href="{{ Route('detail') }}" class="stretched-link"></a>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-6">
        <div class="card shadow">
          <img src="{{ url('frontend/images/sofa4.jpg') }}" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title product-name">Sofa Mantap 4</h5>
            <div class="normal-price">
              <strike>
                <span>Rp 12.000.000<span>
              </strike>
            </div>
            <p class="card-text price">Rp 10.000.000</p>
            <div class="variant">
              <i class="fas fa-circle warna4"></i>
              <i class="fas fa-circle warna2"></i>
              <i class="fas fa-circle warna1"></i>
            </div>
            <a href="{{ Route('detail') }}" class="stretched-link"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="{{ Route('products') }}" class="btn btn-success see-other">Lihat Produk Lainnya</a>
    </div>
  </div>
</div>

<div class="about border-top">
  <div class="container">
    <p class="font-weight-bold">Mengapa membeli sofa di toko kami</p>
    <p class="font-weight-bold text-muted">Metode pembayaran secara COD</p>
    <p class="text-justify">
      &emsp; Toko kami menyediakan metode pembayaran secara COD (Cash On Delivery) atau bayar ditempat. Mengapa COD? Yaaaa bisnis online itu adalah tentang kepercayaan. Kalau pembeli tidak percaya dengan penjual maka tidak akan terjadi transaksi. Oleh karena itu toko kami menyediakan metode pembayaran tidak hanya dengan cara transfer tapi juga bisa secara COD atau bayar ditempat.
    </p>
    <p class="font-weight-bold text-muted">Garansi</p>
    <p class="text-justify">
      &emsp; Belanja di toko kami takut barang cepat rusak ? Tenang saja kami menyediakan jaminan garansi untuk para pembeli. Kenapa toko menyediakan garansi? Yaaa karena dengan cara seperti itu pelanggan tidak akan merasa rugi dan malah sebaliknya, karena barang yang akan diberikan merupakan barang baru. Dengan begitu pembeli akan merasa untung karena tidak mengeluarkan biaya lagi bila ketika ada sesuatu yang tidak diinginkan terjadi dengan barang tersebut.
    </p>
  </div>
</div>
@endsection

@push('addon-style')
  <style>
    
  </style>
@endpush

@push('addon-script')
  <script>
    
  </script>
@endpush