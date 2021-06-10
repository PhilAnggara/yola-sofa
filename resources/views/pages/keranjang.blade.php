@extends('layouts.app')
@section('title', 'Keranjang | Yola Sofa')

@section('content')
<main>
  <div class="container content">
    <div class="row">
      <div class="col-12">
        <h3 class="text-secondary mb-3">
          <i class="fas fa-shopping-cart fa-sm"></i> Keranjang Saya
        </h3>
      </div>
      <div class="col-sm-8 cart-lists">

        @foreach ($item->transaksiDetail as $detail)
          @php
            $product = App\Models\Produk::find($detail->id_produk);
          @endphp
          <div class="card rounded-lg shadow mb-3">
            <div class="card-body">
              <img src="{{ Storage::url($product->gambar->first()->gambar) }}" class="rounded float-left mr-sm-4 mr-2">
              <div class="container">
                <h1 class="mt-sm-2">
                  <a href="{{ Route('beranda') }}">
                    <small>
                      <i class="fas fa-circle text-shadow" style="color: {{ $product->warna->where('nama_warna', $detail->warna)->first()->kode_warna }};"></i>
                    </small>
                    {{ $product->nama_produk }}
                  </a>
                </h1>
                <div class="normal-price">
                  <strike>
                    <span>
                      @if ($product->harga_diskon != NULL)
                        Rp {{ number_format($product->harga, 0, ',', '.') }}
                      @endif
                    <span>
                  </strike>
                </div>
                <h2>Rp {{ number_format($product->harga_diskon == NULL ? $product->harga : $product->harga_diskon, 0, ',', '.') }}</h2>
              </div>
            </div>
            <div class="card-body border-top">
              <nav class="nav justify-content-end">
                <a class="nav-link text-danger btn-lg" href="#"><i class="far fa-trash-alt"></i></a>
                <span class="vertical-devider"></span>
                <div class="quantity">
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-outline-secondary rounded-circle btn-sm mr-1 btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                        <i class="fas fa-minus"></i>
                      </button>
                    </span>
                    <input type="text" name="quant[1]" class="form-control form-control-sm input-number text-center" value="1" min="1" max="10">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-outline-secondary rounded-circle btn-sm ml-1 btn-number" data-type="plus" data-field="quant[1]">
                        <i class="fas fa-plus"></i>
                      </button>
                    </span>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        @endforeach
        
      </div>

      @if ($item != NULL)
      <div class="col-sm-4 col-right">
        <div class="card rounded-lg shadow position-sticky mb-3">
          <div class="card-body">
            <h5 class="card-title mb-3">Ringkasan Belanja</h5>
            <hr>
            <div class="row justify-content-between px-3">
              <p>Jumlah Barang</p>
              <p class="value">{{ $item->transaksiDetail->sum('jumlah_pesanan') }}</p>
            </div>
            <div class="row justify-content-between px-3">
              <p>Total Harga</p>
              <p class="price">Rp {{ number_format($item->total_harga, 0, ',', '.') }}</p>
            </div>
            <a href="{{ Route('checkout') }}" class="btn btn-primary btn-block font-weight-bold">
              Beli ({{ $item->transaksiDetail->sum('jumlah_pesanan') }})
            </a>
          </div>
        </div>
      </div>
      @endif
    </div>
    
    @if ($item == NULL)
      <h2 class="text-center mt-5 text-muted">Keranjang Masih Kosong</h2>
    @endif

  </div>
</main>
@endsection

@push('addon-style')
  <style>
    
  </style>
@endpush

@push('addon-script')
  <script>
    
  </script>
@endpush