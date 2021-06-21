<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductQtyCart extends Component
{
    public $qty;
    public $maxqty = 5;
    public $min = true;
    public $max = false;

    public function mount($item)
    {
        $this->qty = $item->jumlah_pesanan;

        if ($this->qty > 1) {
            $this->min = false;
        }
    }

    public function increment()
    {
        if ($this->qty != $this->maxqty) {
            $this->qty ++;
            $this->min = false;
            if ($this->qty == $this->maxqty) {
                $this->max = true;
            }
        }
    }
    public function decrement()
    {
        if ($this->qty != 1) {
            $this->qty --;
            $this->max = false;
            if ($this->qty == 1) {
                $this->min = true;
            }
        }
    }

    public function render()
    {
        return view('livewire.product-qty-cart');
    }
}
