@extends('layouts.app')
@section('title')
  Nama Produk | Yola Sofa
@endsection

@section('content')
<main>
  <div class="container content">
    <div class="row">
      <div class="col-sm-8">
        <div class="fotorama" data-nav="thumbs" data-fit="cover">
          <img src="{{ url('frontend/images/sofa1.jpg') }}">
          <img src="{{ url('frontend/images/sofa2.jpg') }}">
          <img src="{{ url('frontend/images/sofa3.jpg') }}">
          <img src="{{ url('frontend/images/sofa4.jpg') }}">
        </div>
      </div>
      <div class="col-sm-4 col-right">
        <div class="card rounded-lg shadow position-sticky mt-3 mt-sm-0">
          <div class="card-body">
            <div class="normal-price">
              <strike>
                <span>Rp 12.000.000<span>
              </strike>
            </div>
            <h5 class="card-title price">Rp 10.000.000</h5>
            <div class="quantity mb-4">
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
            <h1 class="card-title">Sofa Mantap 1</h1>
            <h6 class="card-subtitle mb-2 text-muted"><i class="fas fa-check-circle"></i> 21 Terjual</h6>
            <hr>
            <h2 class="text-center">Spesifikasi Produk</h2>
            <div class="row specification">
              <div class="col-sm-6">
                <p class="font-weight-bold spec-title">Finish dan Material</p>
                <div class="row justify-content-between px-3">
                  <p>- Material kaki :</p>
                  <p>Metal</p>
                </div>
                <div class="row justify-content-between px-3">
                  <p>- Material dudukan :</p>
                  <p>Fabric, Rubber & Foam</p>
                </div>
                <div class="row justify-content-between px-3">
                  <p>- Busa :</p>
                  <p>Foam D22</p>
                </div>
                <div class="row justify-content-between px-3">
                  <p>- Rangka :</p>
                  <p>Mix solid wood</p>
                </div>
              </div>
              <div class="col-sm-6">
                <p class="font-weight-bold spec-title">Dimensi</p>
                <div class="row justify-content-between px-3">
                  <p>- Keseluruhan :</p>
                  <p>210 x 97 x 83 cm</p>
                </div>
                <div class="row justify-content-between px-3">
                  <p>- Kedalaman dudukan :</p>
                  <p>54 cm</p>
                </div>
                <div class="row justify-content-between px-3">
                  <p>- Ketebalan dudukan :</p>
                  <p>17 cm</p>
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