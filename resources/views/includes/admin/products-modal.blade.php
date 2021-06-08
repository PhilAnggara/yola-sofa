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
              <label for="nama_produk" class="col-form-label-sm mb-0"><span class="text-danger">*</span> Nama Produk</label>
              <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
            </div>
            <div class="form-group col-md-6">
              <label for="harga" class="col-form-label-sm mb-0"><span class="text-danger">*</span> Harga</label>
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
              <label for="stok" class="col-form-label-sm mb-0"><span class="text-danger">*</span> Stok</label>
              <input type="number" class="form-control" id="stok" name="stok" required>
            </div>
            <div class="form-group col-md-4 col-6">
              <label for="keseluruhan" class="col-form-label-sm mb-0"><span class="text-danger">*</span> Dimensi Keseluruhan</label>
              <div class="input-group">
                <input type="text" class="form-control" id="keseluruhan" name="keseluruhan" required>
                <div class="input-group-append">
                  <span class="input-group-text">cm</span>
                </div>
              </div>
            </div>
            <div class="form-group col-md-4">
              <label for="gambar" class="col-form-label-sm mb-0"><span class="text-danger">*</span> Gambar</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="gambar" name="gambar" required>
                <label class="custom-file-label col-form-label-sm" for="gambar">Pilih Gambar</label>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4 col-6">
              <label for="kedalaman_dudukan" class="col-form-label-sm mb-0">Kedalaman Dudukan</label>
              <div class="input-group">
                <input type="number" class="form-control" id="kedalaman_dudukan" name="kedalaman_dudukan">
                <div class="input-group-append">
                  <span class="input-group-text">cm</span>
                </div>
              </div>
            </div>
            <div class="form-group col-md-4 col-6">
              <label for="ketebalan_dudukan" class="col-form-label-sm mb-0">Ketebalan Dudukan</label>
              <div class="input-group">
                <input type="number" class="form-control" id="ketebalan_dudukan" name="ketebalan_dudukan">
                <div class="input-group-append">
                  <span class="input-group-text">cm</span>
                </div>
              </div>
            </div>
            <div class="form-group col-md-4">
              <label for="material_kaki" class="col-form-label-sm mb-0">Material Kaki</label>
              <input type="text" class="form-control" id="material_kaki" name="material_kaki">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="material_dudukan" class="col-form-label-sm mb-0">Material Dudukan</label>
              <input type="text" class="form-control" id="material_dudukan" name="material_dudukan">
            </div>
            <div class="form-group col-md-4">
              <label for="busa" class="col-form-label-sm mb-0">Busa</label>
              <input type="text" class="form-control" id="busa" name="busa">
            </div>
            <div class="form-group col-md-4">
              <label for="rangka" class="col-form-label-sm mb-0">Rangka</label>
              <input type="text" class="form-control" id="rangka" name="rangka">
            </div>
          </div>

          <hr>

          <div class="form-row">
            <div class="col-sm-7 mt-sm-0">
              <div class="form-group row">
                <label for="nama_warna" class="col-5 col-sm-3 col-form-lable col-form-label-sm"><span class="text-danger">*</span> Nama Warna</label>
                <div class="col-7 col-sm-9">
                  <input type="text" class="form-control form-control-sm" id="nama_warna" name="nama_warna" required>
                </div>
              </div>
            </div>
            <div class="col-sm-7 mt-sm-0">
              <div class="form-group row">
                <label for="kode_warna" class="col-5 col-sm-3 col-form-lable col-form-label-sm"><span class="text-danger">*</span> Warna Produk</label>
                <div class="col-7 col-sm-9">
                  <input type="color" class="form-control" name="kode_warna" id="kode_warna" required>
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
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class="fas fa-times fa-sm text-white-50"></i>
            Tutup
          </button>
          <button type="submit" class="btn btn-success">
            <i class="fas fa-plus fa-sm text-white-50"></i>
            Tambah
          </button>
        </div>
      </form>
    </div>
  </div>
</div>





<!-- Modal edit produk -->
@foreach ($items as $item)
<div class="modal fade" id="editProdukModal-{{ $item->id }}" tabindex="-1" aria-labelledby="EditProdukModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="EditProdukModalLabel">Edit {{ $item->nama_produk }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ Route('produk.update', $item->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="modal-body">

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nama_produk" class="col-form-label-sm mb-0">Nama Produk</label>
              <input type="text" class="form-control" id="nama_produk" name="nama_produk" required value="{{ $item->nama_produk }}">
            </div>
            <div class="form-group col-md-6">
              <label for="harga" class="col-form-label-sm mb-0">Harga</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp</span>
                </div>
                <input type="number" class="form-control" id="harga" name="harga" required value="{{ $item->harga }}">
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="stok" class="col-form-label-sm mb-0">Stok</label>
              <input type="number" class="form-control" id="stok" name="stok" required value="{{ $item->stok }}">
            </div>
            <div class="form-group col-md-6">
              <label for="keseluruhan" class="col-form-label-sm mb-0">Dimensi Keseluruhan</label>
              <div class="input-group">
                <input type="text" class="form-control" id="keseluruhan" name="keseluruhan" required value="{{ $item->keseluruhan }}">
                <div class="input-group-append">
                  <span class="input-group-text">cm</span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6 col-6">
              <label for="kedalaman_dudukan" class="col-form-label-sm mb-0">Kedalaman Dudukan</label>
              <div class="input-group">
                <input type="number" class="form-control" id="kedalaman_dudukan" name="kedalaman_dudukan" value="{{ $item->kedalaman_dudukan }}">
                <div class="input-group-append">
                  <span class="input-group-text">cm</span>
                </div>
              </div>
            </div>
            <div class="form-group col-md-6 col-6">
              <label for="ketebalan_dudukan" class="col-form-label-sm mb-0">Ketebalan Dudukan</label>
              <div class="input-group">
                <input type="number" class="form-control" id="ketebalan_dudukan" name="ketebalan_dudukan" value="{{ $item->ketebalan_dudukan }}">
                <div class="input-group-append">
                  <span class="input-group-text">cm</span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="material_kaki" class="col-form-label-sm mb-0">Material Kaki</label>
              <input type="text" class="form-control" id="material_kaki" name="material_kaki" value="{{ $item->material_kaki }}">
            </div>
            <div class="form-group col-md-6">
              <label for="material_dudukan" class="col-form-label-sm mb-0">Material Dudukan</label>
              <input type="text" class="form-control" id="material_dudukan" name="material_dudukan" value="{{ $item->material_dudukan }}">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="busa" class="col-form-label-sm mb-0">Busa</label>
              <input type="text" class="form-control" id="busa" name="busa" value="{{ $item->busa }}">
            </div>
            <div class="form-group col-md-6">
              <label for="rangka" class="col-form-label-sm mb-0">Rangka</label>
              <input type="text" class="form-control" id="rangka" name="rangka" value="{{ $item->rangka }}">
            </div>
          </div>

          <hr>

          <div class="form-row">
            <div class="form-group col">
              <label for="harga_diskon" class="col-form-label-sm mb-0">Harga Diskon (Tidak boleh lebih dari Rp {{ number_format($item->harga, 0, ',', '.') }})</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">Rp</span>
                </div>
                <input type="number" class="form-control" id="harga_diskon" max="{{ $item->harga }}" name="harga_diskon" value="{{ $item->harga_diskon }}">
              </div>
            </div>
          </div>
          
          <hr>

          <div class="form-row">
            <div class="from-group col">
              <div class="form-check float-right">
                <input type="hidden" name="beranda" value="0">
                <input class="form-check-input" type="checkbox" id="beranda-{{ $item->id }}" name="beranda" value="1" {{ $item->beranda == 1 ? 'checked' : '' }}>
                <label class="form-check-label" for="beranda-{{ $item->id }}">Tampilkan di Beranda</label>
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class="fas fa-times fa-sm text-white-50"></i>
            Tutup
          </button>
          <button type="submit" class="btn btn-info">
            <i class="fas fa-save fa-sm text-white-50"></i>
            Simpan Perubahan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach





<!-- Modal hapus produk -->
@foreach ($items as $item)
<div class="modal fade" id="hapusProdukModal-{{ $item->id }}" tabindex="-1" aria-labelledby="hapusProdukModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="hapusProdukModalLabel">Hapus Produk</p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ Route('produk.destroy', $item->id) }}" method="POST">
        @method('delete')
        @csrf
        <div class="modal-body text-center">

          <i class="fas fa-exclamation-circle fa-2x text-danger mb-4" style="font-size: 80px;"></i>
          <h5 class="font-weight-light">Yakin Ingin Menghapus <b>{{ $item->nama_produk }}</b> ?</h5>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class="fas fa-times fa-sm text-white-50"></i>
            Tutup
          </button>
          <button type="submit" class="btn btn-danger">
            <i class="fas fa-trash fa-sm text-white-50"></i>
            Hapus
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach