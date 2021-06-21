<div class="col-sm-4 col-right">
	<div class="card rounded-lg shadow position-sticky mb-3">
		<div class="card-body">
			<h5 class="card-title mb-3">Ringkasan Belanja</h5>
			<hr>
			<div class="row justify-content-between px-3">
				<p>Jumlah Barang</p>
				<p class="value">{{ $transaksiDetail->sum('jumlah_pesanan') }}</p>
			</div>
			<div class="row justify-content-between px-3">
				<p>Total Harga</p>
				<p class="price">Rp {{ number_format($transaksiDetail->sum('total'), 0, ',', '.') }}</p>
			</div>
			<a href="{{ Route('checkout') }}" class="btn btn-primary btn-block font-weight-bold">
				Beli ({{ $transaksiDetail->sum('jumlah_pesanan') }})
			</a>
		</div>
	</div>
</div>