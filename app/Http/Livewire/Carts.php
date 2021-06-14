<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Helper\CartHelper;

class Carts extends Component
{

    public $cart = [];

    public function mount()
    {
        $this->cart = session('cart') ? session('cart') : [];

    }

    public function update()
    {
        session(['cart'=>$this->cart]);
        $this->emitTo('cart-quantity', 'init');
        $this->emitTo('cart-info', 'init');
    }

    public function delete($id){
        if(isset($this->cart[$id])){
            unset($this->cart[$id]);
        }
        session(['cart'=>$this->cart]);
        $this->emitTo('cart-quantity', 'init');
        $this->emitTo('cart-info', 'init');
    }

    public function increase($id){
        $this->cart[$id]['quantity']++;
        // if(isset($this->cart[$id])){
        // }
        session(['cart'=>$this->cart]);
        $this->emitTo('cart-quantity', 'init');
        $this->emitTo('cart-info', 'init');
    }

    public function decrease($id){
        // if(isset($this->cart[$id])){
            if($this->cart[$id]['quantity']>1)
                $this->cart[$id]['quantity']--;
        // }
        session(['cart'=>$this->cart]);
        $this->emitTo('cart-quantity', 'init');
        $this->emitTo('cart-info', 'init');
    }

    public function render()
    {
        return view('livewire.carts');
    }
}
