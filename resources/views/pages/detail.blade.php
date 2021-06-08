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
            <div class="d-flex">
              <div class="quantity mb-4">
                <div class="input-group">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-outline-secondary rounded-circle btn-sm mr-1 btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                      <i class="fas fa-minus"></i>
                    </button>
                  </span>
                  <input type="text" name="quant[1]" class="form-control form-control-sm input-number text-center" value="1" min="1" max="{{ $item->stok }}">
                  <span class="input-group-btn">
                    <button type="button" class="btn btn-outline-secondary rounded-circle btn-sm ml-1 btn-number" data-type="plus" data-field="quant[1]">
                      <i class="fas fa-plus"></i>
                    </button>
                  </span>
                </div>
              </div>
              <div class="ml-3">
                <p>
                  Stok
                  <span class="font-weight-bold">{{ $item->stok }}</span>
                </p>
              </div>
            </div>
            <form>
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
            </form>
            @if (auth()->user() && auth()->user()->roles == 'USER')
              <button class="btn btn-primary btn-block font-weight-bold"><i class="fas fa-shopping-cart"></i>
                Tambah ke keranjang
              </button>
            @endif
            @guest
              <a href="{{ url('login') }}" class="btn btn-primary btn-block font-weight-bold">
                Masuk
              </a>
            @endguest
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
                <i class="fas fa-circle fa-lg mr-2" style="color: {{ $warna->kode_warna }};"></i> 
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
    
  </style>
@endpush

@push('addon-script')
  <script>
    
  </script>
@endpush