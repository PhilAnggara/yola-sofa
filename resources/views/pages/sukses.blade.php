@extends('layouts.app')
@section('title', 'Yola Sofa')

@section('content')
<main>
  <div class="container success text-center">
    <img src="{{ url('frontend/images/Success.png') }}">
    <h1>Transaksi Telah Diproses</h1>
    <p>Anda akan menerima pemberitahuan jika transaksi telah selesai diproses</p>
    <a href="{{ Route('products') }}" class="btn btn-primary btn-lg">Lanjutkan Berbelanja</a>
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