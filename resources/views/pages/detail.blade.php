@extends('layouts.app')
@section('title')
  {{ $item->nama_produk }} | Yola Sofa
@endsection

@section('content')
<main>
  <div class="container content">
    <div class="row">
      <div class="col-sm-8">
        <div class="fotorama" data-nav="thumbs" data-fit="cover">
          @foreach ($item->gambar as $gambar)
            <img src="{{ Storage::url($gambar->gambar) }}">
          @endforeach
        </div>
      </div>
      <div class="col-sm-4 col-right">
        <div class="card rounded-lg shadow position-sticky mt-3 mt-sm-0">
          <div class="card-body">
            <div class="normal-price">
              <strike>
                <span>
                  @if ($item->harga_diskon != NULL)
                    Rp {{ number_format($item->harga, 0, ',', '.') }}
                  @endif
                <span>
              </strike>
            </div>
            <h5 class="card-title price">
              Rp {{ number_format($item->harga_diskon == NULL ? $item->harga : $item->harga_diskon, 0, ',', '.') }}
            </h5>

            <form action="{{ route('add-to-cart') }}" method="post">
              @csrf
              <div class="d-flex">
                <div class="quantity mb-4">

                  @livewire('product-qty')
                  
                </div>
                <div class="ml-3">
                  <p>
                    Stok
                    <span class="font-weight-bold">{{ $item->stok }}</span>
                  </p>
                </div>
              </div>
              <input type="hidden" name="id_produk" value="{{ $item->id }}">
              <div class="form-group">
                <label for="exampleFormControlSelect1">Pilih Warna</label>
                <select class="form-control" id="exampleFormControlSelect1" name="warna">
                  @foreach ($item->warna as $warna)
                    <option value="{{ $warna->nama_warna }}">
                      <p style="color: {{ $warna->kode_warna }};">{{ $warna->nama_warna }}</p>
                    </option>
                  @endforeach
                </select>
              </div>
              @if (auth()->user() && auth()->user()->roles == 'USER')
                <button type="submit" class="btn btn-primary btn-block font-weight-bold"><i class="fas fa-shopping-cart"></i>
                  Tambah ke keranjang
                </button>
              @endif
              @guest
                <a href="{{ url('login') }}" class="btn btn-primary btn-block font-weight-bold">
                  Masuk
                </a>
              @endguest
            </form>

          </div>
        </div>
      </div>
      <div class="col-sm-8 detail">
        <div class="card my-3 rounded-lg shadow">
          <div class="card-body">
            <h1 class="card-title">{{ $item->nama_produk }}</h1>
            <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-check-circle"></i> 21 Terjual</h6>
            <hr>
            <h3 class="">Varian Warna</h3>
            @foreach ($item->warna as $warna)
              <p class="mb-1 align-top">
                <i class="fas fa-circle fa-lg mr-2 text-shadow" style="color: {{ $warna->kode_warna }};"></i> 
                {{ $warna->nama_warna }}
              </p>
            @endforeach
            <hr>
            <h2 class="text-center">Spesifikasi Produk</h2>
            <div class="row specification">
              <div class="col-sm-6">
                <p class="font-weight-bold spec-title">Finish dan Material</p>
                <div class="row justify-content-between px-3">
                  <p>- Material kaki :</p>
                  <p>{{ $item->material_kaki != NULL ? $item->material_kaki : '-'  }}</p>
                </div>
                <div class="row justify-content-between px-3">
                  <p>- Material dudukan :</p>
                  <p>{{ $item->material_dudukan != NULL ? $item->material_dudukan : '-'  }}</p>
                </div>
                <div class="row justify-content-between px-3">
                  <p>- Busa :</p>
                  <p>{{ $item->busa != NULL ? $item->busa : '-'  }}</p>
                </div>
                <div class="row justify-content-between px-3">
                  <p>- Rangka :</p>
                  <p>{{ $item->rangka != NULL ? $item->rangka : '-'  }}</p>
                </div>
              </div>
              <div class="col-sm-6">
                <p class="font-weight-bold spec-title">Dimensi</p>
                <div class="row justify-content-between px-3">
                  <p>- Keseluruhan :</p>
                  <p>{{ $item->keseluruhan != NULL ? $item->keseluruhan : '-'  }} cm</p>
                </div>
                <div class="row justify-content-between px-3">
                  <p>- Kedalaman dudukan :</p>
                  <p>{{ $item->kedalaman_dudukan != NULL ? $item->kedalaman_dudukan : '-'  }} cm</p>
                </div>
                <div class="row justify-content-between px-3">
                  <p>- Ketebalan dudukan :</p>
                  <p>{{ $item->ketebalan_dudukan != NULL ? $item->ketebalan_dudukan : '-'  }} cm</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection

@push('addon-style')
  <style>
    .text-shadow {
      text-shadow: 0px 0px 1px black;
    }
  </style>
@endpush

@push('addon-script')
  <script>
    
  </script>
@endpush