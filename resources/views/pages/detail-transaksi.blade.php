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
                <h5 class="card-title mb-3 font-weight-bold">Transaksi #{{ $item->nomor_transaksi }}</h5>
              </div>
              <div class="col-6 text-right">
                <small>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM YYYY') }}</small>
                <br>
                <span class="{{ $item->status }}">{{ $item->status }}</span>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-4">
                <p class="text-blue font-weight-bold">DIKIRIM KE</p>
              </div>
              <div class="col-sm-8">
                <p class="font-weight-bold">{{ $item->nama_penerima }}</p>
                <p>{{ $item->no_telp }}</p>
                <a href="{{ $item->detail }}" target="_blank">
                  {{ $item->detail }}
                </a>
                <p>{{ $item->kota }}, Kec. {{ $item->kecamatan }}</p>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <p class="text-blue font-weight-bold mt-3 mt-sm-0">METODE PEMBAYARAN</p>
              </div>
              <div class="col-sm-8">
                <p class="font-weight-bold">{{ $item->metode_pembayaran }}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-8">
                @foreach ($details as $detail)
                  <div class="products">
                    <img src="{{ Storage::url($detail->produk->gambar->first()->gambar) }}" class="rounded float-left mr-4">
                    <div class="container">
                      <h1>
                        <a href="{{ Route('detail', $detail->produk->slug) }}">
                          {{ $detail->produk->nama_produk }}
                        </a>
                      </h1>
                      <h3 class="text-secondary">{{ $detail->jumlah_pesanan }} Barang</h3>
                      <h2>
                        Rp {{ number_format($detail->produk->harga_diskon == NULL ? $detail->produk->harga : $detail->produk->harga_diskon, 0, ',', '.') }}
                      </h2>
                    </div>
                    <hr>
                  </div>
                @endforeach
              </div>
              <div class="col-sm-4">
                <div class="card shadow-sm">
                  <div class="card-body subtotal">
                    <div class="row">
                      <div class="col-6"><p>Subtotal</p></div>
                      <div class="col-6 text-right sub-bold"><p>
                        Rp {{ number_format($item->transaksiDetail->sum('total'), 0, ',', '.') }}
                      </p></div>
                      <div class="col-6"><p>Pengiriman</p></div>
                      <div class="col-6 text-right sub-bold"><p>
                        Rp {{ number_format($item->ongkir, 0, ',', '.') }}
                      </p></div>
                      <div class="col-4"><h4>Total</h4></div>
                      <div class="col-8 text-right sub-bold"><h4>
                        Rp {{ number_format($item->total_harga, 0, ',', '.') }}
                      </h4></div>
                    </div>
                    <form action="{{ Route('cancel', $item->id) }}" method="POST">
                      @csrf
                      @if ($item->status != 'Dibatalkan' && $item->status != 'Selesai')
                        <button type="submit" class="btn btn-block btn-danger mt-2">
                          Batalkan Pesanan
                        </button>
                      @elseif ($item->status == 'Selesai')
                        
                      @else
                        <button class="btn btn-block btn-secondary mt-2" disabled>
                          Pesanan Dibatalkan
                        </button>
                      @endif
                    </form>
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