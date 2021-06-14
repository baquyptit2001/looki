<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartInfo extends Component
{

    public $cart = [];
    public $total = 0;

    protected $listeners = ['init'];

    public function mount()
    {
        $this->init();
    }

    public function init()
    {
        $this->cart = session('cart') ? session('cart') : [];
    }

    public function render()
    {
        return view('livewire.cart-info');
    }
}
