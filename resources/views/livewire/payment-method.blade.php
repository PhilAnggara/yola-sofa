<div>
  <select wire:model="metode" class="custom-select" name="metode_pembayaran" id="metode_pembayaran">
		<option value="Transfer">Transfer</option>
		<option value="COD">COD</option>
	</select>
	<p class="instruksi font-weight-bold mt-2 mb-0">Instruksi Pembayaran</p>
	
	<div class="{{ $metode == 'Transfer' ? 'd-block' : 'd-none' }}">
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
	<div class="{{ $metode == 'Transfer' ? 'd-none' : 'd-block' }}">
		<p class="instruksi font-italic text-secondary">
			Bayar setelah barang diterima.
		</p>
	</div>

</div>
