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
      
      @forelse ($items as $item)
        <div class="col-12 transaction">
          <div class="card rounded-lg shadow mb-3">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-10">
                  <small>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM YYYY') }}</small>
                  <p class="font-weight-bold">Transaksi #{{ $item->nomor_transaksi }}</p>
                  <p>Status <span class="{{ $item->status }}">{{ $item->status }}</span></p>
                  <p>Dikirim Ke : {{ $item->kota }}, Kec. {{ $item->kecamatan }} ({{ $item->nama_penerima }})</p>
                </div>
                <div class="col-sm-2">
                  <a href="{{ Route('transaction-detail', $item->nomor_transaksi) }}" class="btn btn-default float-right">
                    <i class="fas fa-chevron-right fa-sm"></i>
                    Lainnya
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body border-top p-2">
              @foreach ($item->transaksiDetail as $detail)
                <img src="{{ Storage::url($product->find($detail->id_produk)->gambar->first()->gambar) }}" class="rounded-lg shadow-sm">
              @endforeach
              <h1 class="float-right">Rp {{ number_format($item->total_harga, 0, ',', '.') }}</h1>
            </div>
          </div>
        </div>
      @empty
          <div class="col-12 text-center">
            <h2 class="mt-5 text-muted">Anda Belum Memiliki Transaksi</h2>
          </div>
      @endforelse

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