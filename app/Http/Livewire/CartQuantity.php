<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartQuantity extends Component
{

    public $cartquan = [];
    public $total = 0;

    protected $listeners = ['init'];

    public function mount()
    {
        $this->init();
    }

    public function init()
    {
        $this->total = 0;
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
