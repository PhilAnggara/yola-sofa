<div class="input-group">
	<span class="input-group-btn">
		<button wire:click="decrement" type="button" class="btn btn-outline-secondary rounded-circle btn-sm mr-1 btn-number" {{ $min == true ? 'disabled' : '' }}>
			<i class="fas fa-minus"></i>
		</button>
	</span>
	<input type="text" name="jumlah_pesanan" class="form-control form-control-sm input-number text-center" value="{{ $qty }}" min="1" max="10">
	<span class="input-group-btn">
		<button wire:click="increment" type="button" class="btn btn-outline-secondary rounded-circle btn-sm ml-1 btn-number" {{ $max == true ? 'disabled' : '' }}>
			<i class="fas fa-plus"></i>
		</button>
	</span>
</div>