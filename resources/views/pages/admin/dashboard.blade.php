@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <!-- Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Beranda</h1>
  </div>

  <div class="row">

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-bottom-prim shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-dark mb-1">Produk Siap Jual</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $ready }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-check-square text-prim fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-bottom-prim shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-dark mb-1">Menunggu Persetujuan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $pending }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-spinner text-prim fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-bottom-prim shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-dark mb-1">Terjual Bulan Ini</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $terjual }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-truck text-prim fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-bottom-prim shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-dark mb-1">Pemasukan Bulan Ini</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Rp {{ number_format($pemasukan, 0, ',', '.') }}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-cash-register text-prim fa-2x"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
@endsection