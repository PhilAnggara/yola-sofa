<!-- Modal tambah produk -->
<div class="modal fade" id="tambahProdukModal" tabindex="-1" aria-labelledby="tambahProdukModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahProdukModalLabel">Tambah Produk Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ Route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nama_produk"><span class="text-danger">*</span> Nama Produk</label>
              <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
            </div>
            <div class="form-group col-md-6">
              <label for="harga"><span class="text-danger">*</span> Harga</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp</span>
                </div>
                <input type="number" class="form-control" id="harga" name="harga" required>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4 col-6">
              <label for="stok"><span class="text-danger">*</span> Stok</label>
              <input type="number" class="form-control" id="stok" name="stok" required>
            </div>
            <div class="form-group col-md-4 col-6">
              <label for="keseluruhan"><span class="text-danger">*</span> Dimensi Keseluruhan</label>
              <div class="input-group">
                <input type="text" class="form-control" id="keseluruhan" name="keseluruhan" required>
                <div class="input-group-append">
                  <span class="input-group-text">cm</span>
                </div>
              </div>
            </div>
            <div class="form-group col-md-4">
              <label for="gambar"><span class="text-danger">*</span> Gambar</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="gambar" name="gambar" required>
                <label class="custom-file-label" for="gambar">Pilih Gambar</label>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4 col-6">
              <label for="kedalaman_dudukan">Kedalaman Dudukan</label>
              <div class="input-group">
                <input type="number" class="form-control" id="kedalaman_dudukan" name="kedalaman_dudukan">
                <div class="input-group-append">
                  <span class="input-group-text">cm</span>
                </div>
              </div>
            </div>
            <div class="form-group col-md-4 col-6">
              <label for="ketebalan_dudukan">Ketebalan Dudukan</label>
              <div class="input-group">
                <input type="number" class="form-control" id="ketebalan_dudukan" name="ketebalan_dudukan">
                <div class="input-group-append">
                  <span class="input-group-text">cm</span>
                </div>
              </div>
            </div>
            <div class="form-group col-md-4">
              <label for="material_kaki">Material Kaki</label>
              <input type="text" class="form-control" id="material_kaki" name="material_kaki">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="material_dudukan">Material Dudukan</label>
              <input type="text" class="form-control" id="material_dudukan" name="material_dudukan">
            </div>
            <div class="form-group col-md-4">
              <label for="busa">Busa</label>
              <input type="text" class="form-control" id="busa" name="busa">
            </div>
            <div class="form-group col-md-4">
              <label for="rangka">Rangka</label>
              <input type="text" class="form-control" id="rangka" name="rangka">
            </div>
          </div>

          <hr>

          <div class="form-row">
            <div class="col-sm-7 mt-sm-0">
              <div class="form-group row">
                <label for="nama_warna" class="col-6 col-sm-4 col-form-lable"><span class="text-danger">*</span> Nama Warna</label>
                <div class="col-6 col-sm-8">
                  <input type="text" class="form-control form-control-sm" id="nama_warna" name="nama_warna" required>
                </div>
              </div>
            </div>
            <div class="col-sm-7 mt-sm-0">
              <div class="form-group row">
                <label for="kode_warna" class="col-6 col-sm-4 col-form-lable"><span class="text-danger">*</span> Warna Produk</label>
                <div class="col-6 col-sm-8">
                  <input type="color" name="kode_warna" id="kode_warna" required>
                </div>
              </div>
            </div>
          </div>
          
          <hr>

          <div class="form-row">
            <div class="from-group col">
              <div class="form-check float-right">
                <input type="hidden" name="beranda" value="0">
                <input class="form-check-input" type="checkbox" id="beranda" name="beranda" value="1">
                <label class="form-check-label" for="beranda">Tampilkan di Beranda</label>
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-success">Tambahkan</button>
        </div>
      </form>
    </div>
  </div>
</div>