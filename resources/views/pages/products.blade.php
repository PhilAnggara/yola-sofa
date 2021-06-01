@extends('layouts.app')
@section('title', 'Yola Sofa')

@section('content')
<main>
  <div class="product">
    <div class="container">
      <div class="row">
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