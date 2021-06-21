<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;
use Auth;

class Calculation extends Component
{
    public $produk;
    public $transaksi;
    public $transaksiDetail;

    protected $listeners = ['qtyUpdated' => 'qtyUpdated'];

    public function qtyUpdated()
    {
        $this->produk = Produk::all();
        $this->transaksi = Transaksi::where('id_user', auth()->user()->id)
                                    ->where('status', 'onCart')->first();
        $this->transaksiDetail = TransaksiDetail::where('id_transaksi', $this->transaksi->id)->get();
    }

    public function mount()
    {
        $this->produk = Produk::all();
        $this->transaksi = Transaksi::where('id_user', auth()->user()->id)
                                    ->where('status', 'onCart')->first();
        $this->transaksiDetail = TransaksiDetail::where('id_transaksi', $this->transaksi->id)->get();
    }

    public function render()
    {
        return view('livewire.calculation', [
            'produk' => $this->produk,
            'transaksi' => $this->transaksi,
            'transaksiDetail' => $this->transaksiDetail
        ]);
    }
}
