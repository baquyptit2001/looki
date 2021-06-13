<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartQuantity extends Component
{

    public $cartquan = [];
    public $total = 0;

    public function mount()
    {
        $this->cartquan = session('cart') ? session('cart') : [];
        foreach($this->cartquan as $item){
            $this->total += $item['quantity'];
        }
    }

    public function render()
    {
        return view('livewire.cart-quantity');
    }
}
