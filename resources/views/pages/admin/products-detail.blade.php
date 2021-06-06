@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="h4 mb-0 text-gray-500">Produk - <span class="text-gray-800">{{ $item->nama_produk }}</span></h1>
    <button type="button" class="d- d-sm-inline-block btn btn-sm btn-success shadow-sm" data-toggle="modal" data-target="#tambahProdukModal">
      <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Produk
    </button>
  </div>

  <div class="row">
   
    <div class="col-12">
      @if ($errors->any())
        <div class="alert alert-danger">
          <dl>
            @foreach ($errors->all() as $error)
              <dt>{{ $error }}</dt>
            @endforeach
          </dl>
        </div>
      @endif
    </div>

    <div class="col">
      <div class="card border-left-prim shadow h-100 py-2">
        <div class="card-body">
          
        </div>
      </div>
    </div>

  </div>

</div>

@include('includes.admin.products-modal')
@endsection

@push('addon-style')
  <style>

  </style>
@endpush

@push('addon-script')
  <script>
    $(document).on('change', '.custom-file-input', function (event) {
      $(this).next('.custom-file-label').html(event.target.files[0].name);
    });
  </script>
@endpush