@extends('layouts.app')
@section('title', 'Yola Sofa')

@section('content')
<main>
  <div class="product">
    <div class="container">
      <div class="row">

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
    </div>
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