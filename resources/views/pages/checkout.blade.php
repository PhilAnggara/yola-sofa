@extends('layouts.app')
@section('title', 'Periksa Pembelian | Yola Sofa')

@section('content')
<main>
  <div class="container content">

    <form action="{{ Route('process', $item->id) }}" method="POST" enctype="multipart/form-data">
      {{-- @method('PUT') --}}
      @csrf

      <div class="row">
        <div class="col-12">
          <h3 class="text-secondary mb-3">
            <i class="fas fa-check fa-sm"></i> Periksa Pembelian Kamu
          </h3>
        </div>
        <div class="col-sm-8 cart-lists">
          <div class="card rounded-lg shadow mb-3">
            <div class="card-body p-4">
              <h5 class="card-title font-italic">Alamat Pengiriman</h5>

              <div class="form-row">
                <div class="col-sm-6">
                  <label for="nama_penerima" class="col-form-label col-form-label-sm">Nama Penerima</label>
                  <input type="text" class="form-control" name="nama_penerima" placeholder="Tuliskan Nama Penerima" value="{{ $alamat ? $alamat->nama_penerima : '' }}">
                </div>
                <div class="col-sm-6">
                  <label for="no_telp" class="col-form-label col-form-label-sm">Nomor Telepon</label>
                  <input type="number" class="form-control" name="no_telp" placeholder="Masukan Nomor Telepon" value="{{ $alamat ? $alamat->no_telp : '' }}">
                </div>
              </div>
              <div class="form-row">
                <div class="col-sm-6">
                  <label for="kota" class="col-form-label col-form-label-sm">Kabupaten / Kota</label>
                  <select class="custom-select" id="kota" name="kota">
                    <option selected disabled>Pilih Kabupaten / Kota</option>
                    <option {{ $alamat && $alamat->kota == 'Manado' ? 'selected' : '' }} value="Manado">Manado</option>
                    <option {{ $alamat && $alamat->kota == 'Minahasa Utara' ? 'selected' : '' }} value="Minahasa Utara">Minahasa Utara</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label for="kecamatan" class="col-form-label col-form-label-sm">Kecamatan</label>
                  <input type="text" class="form-control" name="kecamatan" placeholder="Tuliskan Nama Kecamatan" value="{{ $alamat ? $alamat->kecamatan : '' }}">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="detail" class="col-form-label col-form-label-sm">Alamat</label>
                  <textarea class="form-control" id="detail" rows="3" name="detail" placeholder="Isi dengan link google maps atau detail lainnya">{{ $alamat ? $alamat->detail : '' }}</textarea>
                </div>
              </div>

            </div>
            <div class="card-body border-top p-4">
              <div class="row">
                <div class="col-sm-7 products-checkout">

                  @foreach ($item->transaksiDetail as $detail)
                    <div class="products">
                      <img src="{{ Storage::url($product->find($detail->id_produk)->gambar->first()->gambar) }}" class="rounded float-left mr-4">
                      <div class="container">
                        <h1>
                          <a href="{{ Route('detail', $product->find($detail->id_produk)->slug) }}">
                            <small>
                              <i class="fas fa-circle text-shadow" style="color: {{ $product->find($detail->id_produk)->warna->where('nama_warna', $detail->warna)->first()->kode_warna }};"></i>
                            </small>
                            {{ $product->find($detail->id_produk)->nama_produk }}
                          </a>
                        </h1>
                        <h3 class="text-secondary">{{ $detail->jumlah_pesanan }} Barang</h3>
                        <h2>
                          Rp {{ number_format($product->find($detail->id_produk)->harga_diskon == NULL ? $product->find($detail->id_produk)->harga : $product->find($detail->id_produk)->harga_diskon, 0, ',', '.') }}
                        </h2>
                      </div>
                      <hr>
                    </div>
                  @endforeach

                </div>
                <div class="col-sm-5 pembayaran">
                  <h5 class="card-title font-italic">Pilih Metode Pembayaran</h5>

                  <select class="custom-select" name="metode_pembayaran" id="metode_pembayaran">
                    <option value="Transfer">Transfer</option>
                    <option value="COD">COD</option>
                  </select>
                  <p class="instruksi font-weight-bold mt-2 mb-0">Instruksi Pembayaran</p>
                  <p class="instruksi font-italic text-secondary">
                    Silahkan melakukan pembayaran sesuai nominal "Total Tagihan" sebelum melanjutkan transaksi
                  </p>
                  <div class="row no-gutters">
                    <img src="{{ url('frontend/images/BRI.png') }}" class="rounded-circle float-left d-inline-block align-middle mt-2 mr-2">
                    <div class="d-inline-block align-middle">
                      <p class="font-weight-bold mb-0">UD Yola Sofa</p>
                      <p class="mb-0">2024 0374 9384 8304</p>
                      <p class="text-blue font-weight-bold">Bank BRI</p>
                    </div>
                  </div>
                  <p class="instruksi font-weight-bold mt-2 mb-0">Sertakan Bukti Transfer</p>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="gambar" id="gambar">
                    <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-right">
          <div class="card rounded-lg shadow position-sticky mb-3">
            <div class="card-body">
              <h5 class="card-title mb-3">Ringkasan Belanja</h5>
              <hr>
              <div class="row justify-content-between px-3">
                <p>Total Harga ({{ $item->transaksiDetail->sum('jumlah_pesanan') }} Produk)</p>
                <p class="font-weight-bold">Rp {{ number_format($item->transaksiDetail->sum('total'), 0, ',', '.') }}</p>
              </div>
              <div class="row justify-content-between px-3">
                <p>Biaya Pengiriman</p>
                <p class="font-weight-bold">Rp 100.000</p>
              </div>
              <hr>
              <div class="row justify-content-between px-3">
                <p class="font-weight-bold">Total Harga</p>
                <p class="price-checkout">Rp {{ number_format($item->total_harga + 100000, 0, ',', '.') }}</p>
              </div>
              <button type="submit" class="btn btn-primary btn-block font-weight-bold">
                <i class="fas fa-money-check fa-sm"></i>
                Sudah Melakukan Pembayaran
              </button>
            </div>
          </div>
        </div>
      </div>
    
    </form>

  </div>
</main>
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