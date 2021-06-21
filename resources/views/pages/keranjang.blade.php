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

        @if ($item)
          @foreach ($item->transaksiDetail as $detail)
            <div class="card rounded-lg shadow mb-3">
              <div class="card-body">
                <img src="{{ Storage::url($product->find($detail->id_produk)->gambar->first()->gambar) }}" class="rounded float-left mr-sm-4 mr-2">
                <div class="container">
                  <h1 class="mt-sm-2">
                    <a href="{{ Route('detail', $product->find($detail->id_produk)->slug) }}">
                      <small>
                        <i class="fas fa-circle text-shadow" style="color: {{ $product->find($detail->id_produk)->warna->where('nama_warna', $detail->warna)->first()->kode_warna }};"></i>
                      </small>
                      {{ $product->find($detail->id_produk)->nama_produk }}
                    </a>
                  </h1>
                  <div class="normal-price">
                    <strike>
                      <span>
                        @if ($product->find($detail->id_produk)->harga_diskon != NULL)
                          Rp {{ number_format($product->find($detail->id_produk)->harga, 0, ',', '.') }}
                        @endif
                      <span>
                    </strike>
                  </div>
                  <h2>Rp {{ number_format($product->find($detail->id_produk)->harga_diskon == NULL ? $product->find($detail->id_produk)->harga : $product->find($detail->id_produk)->harga_diskon, 0, ',', '.') }}</h2>
                </div>
              </div>
              <div class="card-body border-top">
                <nav class="nav justify-content-end">
                  <a class="nav-link text-danger btn-lg" href="{{ route('remove-from-cart', $detail->id) }}">
                    <i class="far fa-trash-alt"></i>
                  </a>
                  <span class="vertical-devider"></span>
                  <div class="quantity">
                    
                    @livewire('product-qty-cart', ['item' => $detail])
                    
                  </div>
                </nav>
              </div>
            </div>
          @endforeach
        @endif
        
      </div>

      @if ($item != NULL)
        @livewire('calculation')
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