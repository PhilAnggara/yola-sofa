@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Produk</h1>
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
      <div class="card border-bottom-prim shadow h-100 py-2">
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-responsive-sm text-center text-nowrap">
            <thead class="thead-light">
              <tr>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga</th>
                <th scope="col" width="60">Stok</th>
                <th scope="col" width="110px">Dimensi</th>
                <th scope="col" width="110px">Tampilkan di Beranda</th>
                <th scope="col" width="110px">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($items as $item)
                <tr>
                  <td>{{ $item->nama_produk }}</td>
                  <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                  <td>{{ $item->stok }}</td>
                  <td>{{ $item->keseluruhan }}</td>
                  <td>{{ $item->beranda == 1 ? 'Ya' : '' }}</td>
                  <td>
                    <a href="{{ Route('produk.show', $item->slug) }}" class="btn btn-primary btn-sm">
                      <i class="far fa-eye"></i>
                    </a>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#editProdukModal-{{ $item->id }}">
                      <i class="far fa-edit"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusProdukModal-{{ $item->id }}">
                      <i class="fas fa-trash"></i>
                    </button>
                  </td>
                </tr>
              @empty
                <tr>
                  <th colspan="10" class="text-center align-middle" height="100px">
                    Belum Ada Produk
                  </th>
                </tr>
              @endforelse
            </tbody>
          </table>
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
    $(document).ready(function() {
      $('#dataTable').DataTable( {
        language: {
          search: "",
          searchPlaceholder: "Cari...",
          zeroRecords: "Data tidak ditemukan",
          info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
          infoEmpty: "Menampilkan 0 sampai 0 dari 0 data",
          infoFiltered: "(difilter dari _MAX_ total data)",
          paginate: {
            first:    "Pertama",
            last:     "Terakhir",
            next:     "<i class='fas fa-angle-right'></i>",
            previous: "<i class='fas fa-angle-left'></i>"
          },
        },
        // paging:  false,
        lengthChange: false,
        ordering: false,
        searching: false,
        info: false,
        processing: true,
        pageLength:10,

        // dom: '<lf<t>ip>'
      });
    });

    $(document).on('change', '.custom-file-input', function (event) {
      $(this).next('.custom-file-label').html(event.target.files[0].name);
    });
  </script>
@endpush