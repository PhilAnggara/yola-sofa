<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductQty extends Component
{
    public $qty = 1;
    public $min = true;

    public function increment()
    {
        $this->qty ++;

        if ($this->qty > 1) {
            $this->min = false;
        }
    }
    public function decrement()
    {
        if ($this->qty == 1) {
            $this->min = true;
        } else {
            $this->qty --;
        }
    }

    public function render()
    {
        return view('livewire.product-qty');
    }
}
