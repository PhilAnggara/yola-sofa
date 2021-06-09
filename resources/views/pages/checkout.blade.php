@extends('layouts.app')
@section('title', 'Periksa Pembelian | Yola Sofa')

@section('content')
<main>
  <div class="container content">
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
            <form>
              <div class="form-row">
                <div class="col-sm-6">
                  <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Nama Penerima</label>
                  <input type="text" class="form-control" placeholder="Tuliskan Nama Penerima">
                </div>
                <div class="col-sm-6">
                  <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Nomor Telepon</label>
                  <input type="text" class="form-control" placeholder="Masukan Nomor Telepon">
                </div>
              </div>
              <div class="form-row">
                <div class="col-sm-6">
                  <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Kabupaten / Kota</label>
                  <select class="custom-select" id="inputGroupSelect01">
                    <option selected disabled>Pilih Kabupaten / Kota</option>
                    <option value="Manado">Manado</option>
                    <option value="Minahasa Utara">Minahasa Utara</option>
                  </select>
                </div>
                <div class="col-sm-6">
                  <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Kecamatan</label>
                  <input type="text" class="form-control" placeholder="Tuliskan Nama Kecamatan">
                </div>
              </div>
              <div class="form-row">
                <div class="col">
                  <label for="colFormLabelSm" class="col-form-label col-form-label-sm">Alamat</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Isi dengan nama jalan, nomor rumah, nomor kompleks, nama gedung, lantai atau link google maps"></textarea>
                </div>
              </div>
            </form>
          </div>
          <div class="card-body border-top p-4">
            <div class="row">
              <div class="col-sm-7 products-checkout">
                <div class="products">
                  <img src="{{ url('frontend/images/sofa1.jpg') }}" class="rounded float-left mr-4">
                  <div class="container">
                    <h1><a href="{{ Route('beranda') }}">Sofa Mantap 1</a></h1>
                    <h3 class="text-secondary">2 Barang</h3>
                    <h2>Rp 10.000.000</h2>
                  </div>
                  <hr>
                </div>
                <div class="products">
                  <img src="{{ url('frontend/images/sofa2.jpg') }}" class="rounded float-left mr-4">
                  <div class="container">
                    <h1><a href="{{ Route('beranda') }}">Sofa Mantap 2</a></h1>
                    <h3 class="text-secondary">1 Barang</h3>
                    <h2>Rp 12.000.000</h2>
                  </div>
                  <hr>
                </div>
                <div class="products">
                  <img src="{{ url('frontend/images/sofa3.jpg') }}" class="rounded float-left mr-4">
                  <div class="container">
                    <h1><a href="{{ Route('beranda') }}">Sofa Mantap 3</a></h1>
                    <h3 class="text-secondary">1 Barang</h3>
                    <h2>Rp 8.000.000</h2>
                  </div>
                  <hr>
                </div>
              </div>
              <div class="col-sm-5 pembayaran">
                <h5 class="card-title font-italic">Pilih Metode Pembayaran</h5>
                <form action="">
                  <select class="custom-select" id="inputGroupSelect01">
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
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Pilih Gambar</label>
                  </div>
                </form>
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
              <p>Total Harga (4 Produk)</p>
              <p class="font-weight-bold">Rp 40.000.000</p>
            </div>
            <div class="row justify-content-between px-3">
              <p>Biaya Pengiriman</p>
              <p class="font-weight-bold">Rp 100.000</p>
            </div>
            <hr>
            <div class="row justify-content-between px-3">
              <p class="font-weight-bold">Total Harga</p>
              <p class="price-checkout">Rp 40.000.000</p>
            </div>
            <a href="{{ Route('success') }}" class="btn btn-primary btn-block font-weight-bold">
              <i class="fas fa-money-check fa-sm"></i>
              Sudah Melakukan Pembayaran
            </a>
            <!-- <button class="btn btn-primary btn-block font-weight-bold">
              Beli (4)
            </button> -->
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