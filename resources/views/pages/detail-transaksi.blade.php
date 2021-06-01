@extends('layouts.app')
@section('title', 'Detail Transaksi | Yola Sofa')

@section('content')
<main>
  <div class="container content">
    <div class="row">
      <div class="col-12">
        <h3 class="mb-3">
          <a href="{{ Route('transaction') }}" class="text-decoration-none text-dark">
            <i class="fas fa-chevron-left fa-sm"></i>
            Kembali
          </a>
        </h3>
      </div>
      <div class="col-12 transaction-detail">
        <div class="card rounded-lg shadow mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <h5 class="card-title mb-3 font-weight-bold">Transaksi #1000347839247</h5>
              </div>
              <div class="col-6 text-right">
                <small>10 Mei 2021</small>
                <br>
                <span class="bg-tertunda">Tertunda</span>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="text-blue font-weight-bold">DIKIRIM KE</p>
              </div>
              <div class="col-sm-8">
                <p class="font-weight-bold">Tommy Ramba</p>
                <p>085155117682</p>
                <a href="https://goo.gl/maps/ACLyGfvmzRTSxNh66" target="_blank">
                  https://goo.gl/maps/ACLyGfvmzRTSxNh66
                </a>
                <p>Kecamatan Dumoga, Bolaang Mongondow</p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <p class="text-blue font-weight-bold mt-3 mt-sm-0">METODE PEMBAYARAN</p>
              </div>
              <div class="col-sm-8">
                <p class="font-weight-bold">Transfer</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-8">
                <div class="products">
                  <img src="{{ url('frontend/images/sofa1.jpg') }}" class="rounded float-left mr-4">
                  <div class="container">
                    <h1><a href="{{ Route('detail') }}">Sofa Mantap 1</a></h1>
                    <h3 class="text-secondary">2 Barang</h3>
                    <h2>Rp 10.000.000</h2>
                  </div>
                  <hr>
                </div>
                <div class="products">
                  <img src="{{ url('frontend/images/sofa2.jpg') }}" class="rounded float-left mr-4">
                  <div class="container">
                    <h1><a href="{{ Route('detail') }}">Sofa Mantap 2</a></h1>
                    <h3 class="text-secondary">1 Barang</h3>
                    <h2>Rp 12.000.000</h2>
                  </div>
                  <hr>
                </div>
                <div class="products">
                  <img src="{{ url('frontend/images/sofa3.jpg') }}" class="rounded float-left mr-4">
                  <div class="container">
                    <h1><a href="{{ Route('detail') }}">Sofa Mantap 3</a></h1>
                    <h3 class="text-secondary">1 Barang</h3>
                    <h2>Rp 8.000.000</h2>
                  </div>
                  <hr>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card shadow-sm">
                  <div class="card-body subtotal">
                    <div class="row">
                      <div class="col-6"><p>Subtotal</p></div>
                      <div class="col-6 text-right sub-bold"><p>Rp 40.000.000</p></div>
                      <div class="col-6"><p>Pengiriman</p></div>
                      <div class="col-6 text-right sub-bold"><p>Rp 100.000</p></div>
                      <div class="col-6"><h4>Total</h4></div>
                      <div class="col-6 text-right sub-bold"><h4>Rp 40.100.000</h4></div>
                    </div>
                    <button class="btn btn-block btn-danger mt-2">Batalkan Pesanan</button>
                  </div>
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