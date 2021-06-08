<!-- Modal tambah gambar -->
<div class="modal fade" id="tambahGambarModal" tabindex="-1" aria-labelledby="tambahGambarModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahGambarModalLabel">Tambah Gambar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ Route('gambar.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">

          <input type="hidden" name="id_produk" value="{{ $item->id }}">
          
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="gambar" name="gambar" required>
            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal tambah warna -->
<div class="modal fade" id="tambahWarnaModal" tabindex="-1" aria-labelledby="tambahWarnaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tambahWarnaModalLabel">Tambah Warna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ Route('warna.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">

          <input type="hidden" name="id_produk" value="{{ $item->id }}">

          <div class="form-group row">
            <label for="nama_warna" class="col-sm-4 col-form-label">Nama Warna</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="nama_warna" name="nama_warna" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="kode_warna" class="col-sm-4 col-form-label">Warna Produk</label>
            <div class="col-sm-8">
              <input type="color" class="form-control" id="kode_warna" name="kode_warna" required>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>