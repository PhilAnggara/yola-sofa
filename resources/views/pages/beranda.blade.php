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
      @foreach ($items as $item)
        <div class="col-sm-3 col-6">
          <div class="card shadow">
            <img src="{{ Storage::url($item->gambar->first()->gambar) }}" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title product-name">{{ $item->nama_produk }}</h5>
              <div class="normal-price">
                <strike>
                  <span>
                    @if ($item->harga_diskon != NULL)
                      Rp {{ number_format($item->harga, 0, ',', '.') }}
                    @endif
                  <span>
                </strike>
              </div>
              <p class="card-text price">
                Rp {{ number_format($item->harga_diskon == NULL ? $item->harga : $item->harga_diskon, 0, ',', '.') }}
              </p>
              <div class="variant">
                @foreach ($item->warna as $warna)
                  <i class="fas fa-circle" style="color: {{ $warna->kode_warna }};"></i>
                @endforeach
              </div>
              <a href="{{ Route('detail', $item->slug) }}" class="stretched-link"></a>
            </div>
          </div>
        </div>
      @endforeach
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