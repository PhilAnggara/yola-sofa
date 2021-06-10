<!-- Modal ubah status -->
@foreach ($items as $item)
<div class="modal fade" id="ubahStatusModal-{{ $item->id }}" tabindex="-1" aria-labelledby="ubahStatusModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ubahStatusModalLabel">
          Ubah Status <strong>#{{ $item->nomor_transaksi }}</strong>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ Route('transaksi.update', $item->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="modal-body">

          <select class="form-control" name="status">
            <option {{ $item->status == 'Pending' ? 'selected' : '' }}>Pending</option>
            <option {{ $item->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
            <option {{ $item->status == 'Dikirim' ? 'selected' : '' }}>Dikirim</option>
            <option {{ $item->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
          </select>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class="fas fa-times fa-sm text-white-50"></i>
            Tutup
          </button>
          <button type="submit" class="btn btn-info">
            <i class="fas fa-save fa-sm text-white-50"></i>
            Ubah Status
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach


<!-- Modal detail transaksi -->
@foreach ($items as $item)
<div class="modal fade" id="detailTransaksiModal-{{ $item->id }}" tabindex="-1" aria-labelledby="detailTransaksiModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailTransaksiModalLabel">
          Detail Transaksi <strong>#{{ $item->nomor_transaksi }}</strong>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="row mb-3">
          <div class="col-6 border-right border-bottom">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <th>Nama Pembeli</th>
                  <td>:</td>
                  <td>{{ $item->user->name }}</td>
                </tr>
                <tr>
                  <th>Tanggal</th>
                  <td>:</td>
                  <td>{{ Carbon\Carbon::parse($item->created_at)->isoFormat('D MMMM YYYY') }}</td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-6 border-left border-bottom">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <th>Status Transaksi</th>
                  <td>:</td>
                  <td class="text-uppercase font-weight-bold">{{ $item->status }}</td>
                </tr>
                <tr>
                  <th>Metode Pembayaran</th>
                  <td>:</td>
                  <td>{{ $item->metode_pembayaran }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        
        <small>Data Pengiriman</small>
        <div class="row mb-3">
          <div class="col-6 border-right border-bottom">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <th>Nama Penerima</th>
                  <td>:</td>
                  <td>{{ $item->nama_penerima }}</td>
                </tr>
                <tr>
                  <th>Kabupaten / Kota</th>
                  <td>:</td>
                  <td>{{ $item->kota }}</td>
                </tr>
                <tr>
                  <th>Detail Alamat</th>
                  <td>:</td>
                  <td class="text-break">
                    <a href="{{ $item->detail }}" target="_blank" class="text-secondary">
                      {{ $item->detail }}
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="col-6 border-left border-bottom">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <th>No Telp</th>
                  <td>:</td>
                  <td class="text-uppercase font-weight-bold">{{ $item->no_telp }}</td>
                </tr>
                <tr>
                  <th>Kecamatan</th>
                  <td>:</td>
                  <td>{{ $item->kecamatan }}</td>
                </tr>
                <tr>
                  <th>Ongkos Kirim</th>
                  <td>:</td>
                  <td>{{ $item->ongkir }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <small>Produk Yang Dipesan</small>
        <table class="table table-bordered text-center">
          <thead>
            <tr>
              <th scope="col">Nama Produk</th>
              <th scope="col">Jumlah Pesanan</th>
              <th scope="col">Warna</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($item->transaksiDetail as $detail)
              <tr>
                <td>{{ $produk->find($detail->id_produk)->nama_produk }}</td>
                <td>{{ $detail->jumlah_pesanan }}</td>
                <td>{{ $detail->warna }}</td>
                <td>Rp {{ number_format($detail->total, 0, ',', '.') }}</td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th colspan="3">Subtotal</th>
              <th>Rp {{ number_format($item->transaksiDetail->sum('total'), 0, ',', '.') }}</th>
            </tr>
            <tr>
              <th colspan="3">Total</th>
              <th>Rp {{ number_format($item->total_harga, 0, ',', '.') }}</th>
            </tr>
          </tfoot>
        </table>

        @if ($item->metode_pembayaran == 'Transfer')
          @if ($item->gambar != NULL)
            <div class="d-flex justify-content-center">
              <img src="{{ Storage::url($item->gambar) }}" class="img-fluid rounded-lg shadow-sm">
            </div>
          @else
            <h5 class="text-center py-5 border font-italic shadow-sm">Bukti Pembayaran Tidak Dikirim</h5>
          @endif
        @endif

      </div>
    </div>
  </div>
</div>
@endforeach