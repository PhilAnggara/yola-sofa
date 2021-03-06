<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductQty extends Component
{
    public $qty = 1;
    public $maxqty = 5;
    public $min = true;
    public $max = false;

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
        return view('livewire.product-qty');
    }
}
