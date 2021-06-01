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
        <div class="card rounded-lg shadow mb-3">
          <div class="card-body">
            <img src="{{ url('frontend/images/sofa1.jpg') }}" class="rounded float-left mr-sm-4 mr-2">
            <div class="container">
              <h1 class="mt-sm-2"><a href="{{ Route('detail') }}">Sofa Mantap 1</a></h1>
              <div class="normal-price">
                <strike>
                  <span>Rp 12.000.000<span>
                </strike>
              </div>
              <h2>Rp 10.000.000</h2>
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
        <div class="card rounded-lg shadow mb-3">
          <div class="card-body">
            <img src="{{ url('frontend/images/sofa2.jpg') }}" class="rounded float-left mr-sm-4 mr-2">
            <div class="container">
              <h1 class="mt-sm-2"><a href="{{ Route('detail') }}">Sofa Mantap 2</a></h1>
              <div class="normal-price">
                <strike>
                  <span>Rp 15.000.000<span>
                </strike>
              </div>
              <h2>Rp 12.000.000</h2>
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
        <div class="card rounded-lg shadow mb-3">
          <div class="card-body">
            <img src="{{ url('frontend/images/sofa3.jpg') }}" class="rounded float-left mr-sm-4 mr-2">
            <div class="container">
              <h1 class="mt-sm-2"><a href="{{ Route('detail') }}">Sofa Mantap 3</a></h1>
              <div class="normal-price">
                <strike>
                  <span>Rp 11.000.000<span>
                </strike>
              </div>
              <h2>Rp 8.000.000</h2>
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
        <div class="card rounded-lg shadow mb-3">
          <div class="card-body">
            <img src="{{ url('frontend/images/sofa4.jpg') }}" class="rounded float-left mr-sm-4 mr-2">
            <div class="container">
              <h1 class="mt-sm-2"><a href="{{ Route('detail') }}">Sofa Mantap 4</a></h1>
              <div class="normal-price">
                <strike>
                  <span>Rp 12.000.000<span>
                </strike>
              </div>
              <h2>Rp 10.000.000</h2>
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
      </div>

      <div class="col-sm-4 col-right">
        <div class="card rounded-lg shadow position-sticky mb-3">
          <div class="card-body">
            <h5 class="card-title mb-3">Ringkasan Belanja</h5>
            <hr>
            <div class="row justify-content-between px-3">
              <p>Jumlah Barang</p>
              <p class="value">4</p>
            </div>
            <div class="row justify-content-between px-3">
              <p>Total Harga</p>
              <p class="price">Rp 40.000.000</p>
            </div>
            <a href="{{ Route('checkout') }}" class="btn btn-primary btn-block font-weight-bold">
              Beli (4)
            </a>
            <!-- <button class="btn btn-primary btn-block font-weight-bold">
              Beli (4)
            </button> -->
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