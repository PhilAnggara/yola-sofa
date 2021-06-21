<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\TransaksiDetail;

class ProductQtyCart extends Component
{
    public $qty;
    public $maxqty = 5;
    public $min = true;
    public $max = false;
    
    public $produk;
    public $transaksi;
    public $transaksiDetail;

    public function mount($item)
    {
        $this->qty = $item->jumlah_pesanan;
        $this->produk = Produk::find($item->id_produk);
        $this->transaksiDetail = TransaksiDetail::find($item->id);
        $this->transaksi = Transaksi::find($this->transaksiDetail->id_transaksi);

        if ($this->qty > 1) {
            $this->min = false;
        }
    }

    public function increment()
    {
        if ($this->qty != $this->maxqty) {
            $this->qty ++;

            // Update jumlah pesanan dan total pada transaksi detail
            $this->transaksiDetail->jumlah_pesanan = $this->qty;
            if ($this->produk->harga_diskon != NULL) {
                $this->transaksiDetail->total = 
                    $this->produk->harga_diskon * $this->transaksiDetail->jumlah_pesanan;
            } else {
                $this->transaksiDetail->total = 
                    $this->produk->harga * $this->transaksiDetail->jumlah_pesanan;
            }
            $this->transaksiDetail->save();

            // Update total harga pada transaksi
            $this->transaksi->total_harga = $this->transaksi->transaksiDetail->sum('total');
            // $this->transaksi->total_harga += $this->transaksi->ongkir;
            $this->transaksi->save();

            $this->min = false;
            if ($this->qty == $this->maxqty) {
                $this->max = true;
            }
        }
        $this->emit('qtyUpdated');
    }
    public function decrement()
    {
        if ($this->qty != 1) {
            $this->qty --;

            // Update jumlah pesanan dan total pada transaksi detail
            $this->transaksiDetail->jumlah_pesanan = $this->qty;
            if ($this->produk->harga_diskon != NULL) {
                $this->transaksiDetail->total = 
                    $this->produk->harga_diskon * $this->transaksiDetail->jumlah_pesanan;
            } else {
                $this->transaksiDetail->total = 
                    $this->produk->harga * $this->transaksiDetail->jumlah_pesanan;
            }
            $this->transaksiDetail->save();

            // Update total harga pada transaksi
            $this->transaksi->total_harga = $this->transaksi->transaksiDetail->sum('total');
            // $this->transaksi->total_harga += $this->transaksi->ongkir;
            $this->transaksi->save();

            $this->max = false;
            if ($this->qty == 1) {
                $this->min = true;
            }
        }
        $this->emit('qtyUpdated');
    }

    public function render()
    {
        return view('livewire.product-qty-cart');
    }
}
