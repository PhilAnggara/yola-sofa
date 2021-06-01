@extends('layouts.app')
@section('title', 'Yola Sofa')

@section('content')
<main>
  <div class="container content">
    <div class="row">
      <div class="col-12">
        <h3 class="text-secondary mb-3">
          Transaksi Saya
        </h3>
      </div>
      <div class="col-12 transaction">
        <div class="card rounded-lg shadow mb-3">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-10">
                <small>10 Mei 2021</small>
                <p class="font-weight-bold">Transaksi #1000347839247</p>
                <p>Status <span class="bg-tertunda">Tertunda</span></p>
                <p>Dikirim Ke : Kairagi Satu, Kec. Mapanget (Tomi Ramba)</p>
              </div>
              <div class="col-sm-2">
                <a href="{{ Route('transaction-detail') }}" class="btn btn-default float-right">
                  <i class="fas fa-chevron-right fa-sm"></i>
                  Lainnya
                </a>
              </div>
            </div>
          </div>
          <div class="card-body border-top p-2">
            <img src="{{ url('frontend/images/sofa1.jpg') }}" class="rounded-lg shadow-sm">
            <img src="{{ url('frontend/images/sofa2.jpg') }}" class="rounded-lg shadow-sm">
            <img src="{{ url('frontend/images/sofa3.jpg') }}" class="rounded-lg shadow-sm">
            <h1 class="float-right">Rp 40.100.000</h1>
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