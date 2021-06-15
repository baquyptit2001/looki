<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{

    public $product = [];
    public $string = '';

    public function mount()
    {
        $this->init();
    }

    public function init()
    {
        if($this->string != '')
            $this->product = Product::where('name', 'like', '%' . $this->string . '%')->get()->toArray();
    }

    public function clear()
    {
        $this->string = '';
        $this->product = [];
    }

    public function render()
    {
        return view('livewire.search');
    }
}
