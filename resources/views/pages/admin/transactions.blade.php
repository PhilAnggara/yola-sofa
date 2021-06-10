@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <div class="d-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Transaksi</h1>
  </div>

  <div class="row">

    <div class="col">
      <div class="card border-bottom-prim shadow h-100 py-2">
        <div class="card-body">
          <table id="dataTable" class="table table-bordered table-responsive-sm text-center text-nowrap">
            <thead class="thead-light">
              <tr>
                <th scope="col">Nomor Transaksi</th>
                <th scope="col">Pembeli</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Status</th>
                <th scope="col" width="110px">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @forelse ($items as $item)
                <tr>
                  <td>{{ $item->nomor_transaksi }}</td>
                  <td>{{ $item->user->name }}</td>
                  <td>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM YYYY') }}</td>
                  <td>{{ $item->transaksiDetail->sum('jumlah_pesanan') }}</td>
                  <td>Rp {{ number_format($item->total_harga, 0, ',', '.') }}</td>
                  <td>
                    <button type="button" class="btn btn-outline-info {{ $item->status }} btn-sm text-uppercase" data-toggle="modal" data-target="#ubahStatusModal-{{ $item->status != 'Dibatalkan' ? $item->id : ''}}">
                      {{ $item->status }}
                    </button>
                  </td>
                  <td>
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#detailTransaksiModal-{{ $item->id }}">
                      <i class="far fa-eye"></i>
                      Detail
                    </button>
                  </td>
                </tr>
              @empty
                <tr>
                  <th colspan="10" class="text-center align-middle" height="100px">
                    Belum Ada Transaksi
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

@include('includes.admin.transactions-modal')
@endsection

@push('addon-style')
  <style>
    .Pending {
      border: 1px solid  #ffc107;
      color: #ffc107;
    }
    .Pending:hover {
      border: 1px solid  #ffc107;
      background-color: #ffc107;
      color: white;
    }
    .Diproses {
      border: 1px solid  #28a745;
      color: #28a745;
    }
    .Diproses:hover {
      border: 1px solid  #28a745;
      background-color: #28a745;
      color: white;
    }
    .Dikirim {
      border: 1px solid  #17a2b8;
      color: #17a2b8;
    }
    .Dikirim:hover {
      border: 1px solid  #17a2b8;
      background-color: #17a2b8;
      color: white;
    }
    .Selesai {
      border: 1px solid  #424242;
      color: #424242;
    }
    .Selesai:hover {
      border: 1px solid  #424242;
      background-color: #424242;
      color: white;
    }
    .Dibatalkan {
      border: 1px solid  #dc3545;
      color: #dc3545;
    }
    .Dibatalkan:hover {
      border: 1px solid  #dc3545;
      background-color: #dc3545;
      color: white;
    }
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