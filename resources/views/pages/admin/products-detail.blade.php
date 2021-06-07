@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <div class="d-flex align-items-center justify-content-between mb-1">
    <div>
      <h1 class="h4 text-gray-500">
        Produk - 
        <span class="text-gray-800">{{ $item->nama_produk }}</span>
      </h1>
      <p class="text-gray-700">
        @if ($item->stok != 0)
          ({{ $item->stok }} unit tersedia)
        @else
          (Stok kosong)
        @endif
      </p>
    </div>
    <div>
      <button type="button" class="d- d-sm-inline-block btn btn-sm btn-outline-primary shadow-sm" data-toggle="modal" data-target="#tambahGambarModal">
        <i class="fas fa-file-image fa-sm"></i> Tambah Gambar
      </button>
      <button type="button" class="d- d-sm-inline-block btn btn-sm btn-outline-info shadow-sm" data-toggle="modal" data-target="#tambahGambarModal">
        <i class="fas fa-tint fa-sm"></i> Tambah Warna
      </button>
    </div>
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
      <div class="card border-bottom-prim shadow h-100 py-2">
        <div class="card-body">
          <h5 class="text-center font-weight-bold text-dark">Gambar Produk</h5>
          <div class="row">
            @foreach ($item->gambar as $gbr)
              <div class="col-4 text-center mb-2">
                <img src="{{ Storage::url($gbr->gambar) }}" class="rounded img-thumbnail">
                <form action="{{ Route('admin') }}" method="POST">
                  @method('delete')
                  @csrf
                  <button class="btn btn-link btn-sm">
                    Hapus
                  </button>
                </form>
              </div>
            @endforeach
          </div>
          <h5 class="font-weight-bold text-dark mt-2">Warna Produk</h5>
          @foreach ($item->warna as $warna)
            <div class="d-flex w-25">
              <div class="p-2">
                <p class="text-dark mb-0">
                  <i class="fas fa-circle" style="color: {{ $warna->kode_warna }};"></i> 
                  {{ $warna->nama_warna }}
                </p>
              </div>
              <div class="ml-auto p-2">
                <form action="{{ Route('admin') }}" method="POST">
                  {{-- @method('delete') --}}
                  @csrf
                  <button class="btn btn-link btn-sm" style="color: {{ $warna->kode_warna }};">
                    Hapus
                  </button>
                </form>
              </div>
            </div>
          @endforeach
          <div class="detail">
            <hr>
            <h5 class="text-center font-weight-bold text-dark">Spesifikasi Produk</h5>
            <div class="row specification text-dark">
              <div class="col-sm-6">
                <p class="font-weight-bold spec-title">Finish dan Material</p>
                <div class="row justify-content-between px-3">
                  <p>- Material kaki :</p>
                  <p>{{ $item->material_kaki != NULL ? $item->material_kaki : '-' }}</p>
                </div>
                <div class="row justify-content-between px-3">
                  <p>- Material dudukan :</p>
                  <p>{{ $item->material_dudukan != NULL ? $item->material_dudukan : '-' }}</p>
                </div>
                <div class="row justify-content-between px-3">
                  <p>- Busa :</p>
                  <p>{{ $item->busa != NULL ? $item->busa : '-' }}</p>
                </div>
                <div class="row justify-content-between px-3">
                  <p>- Rangka :</p>
                  <p>{{ $item->rangka != NULL ? $item->rangka : '-' }}</p>
                </div>
              </div>
              <div class="col-sm-6">
                <p class="font-weight-bold spec-title">Dimensi</p>
                <div class="row justify-content-between px-3">
                  <p>- Keseluruhan :</p>
                  <p>{{ $item->keseluruhan != NULL ? $item->keseluruhan : '-' }} cm</p>
                </div>
                <div class="row justify-content-between px-3">
                  <p>- Kedalaman dudukan :</p>
                  <p>{{ $item->kedalaman_dudukan != NULL ? $item->kedalaman_dudukan : '-' }} cm</p>
                </div>
                <div class="row justify-content-between px-3">
                  <p>- Ketebalan dudukan :</p>
                  <p>{{ $item->ketebalan_dudukan != NULL ? $item->ketebalan_dudukan : '-' }} cm</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
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