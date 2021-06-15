<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Wishlist;
use App\Models\imgProduct;
use App\Models\ProductSize;
use Illuminate\Support\Facades\Auth;

class ModalProduct extends Component
{

    public $modalProduct = [];

    public function mount()
    {
        $this->init();
        dd($this->modalProduct);
        // dd($this->quan);
        // dd($this->modalProduct);
    }

    public function submit()
    {
        dd("ABC");
    }

    public function init()
    {
        $this->modalProduct = Product::all()->toArray();
        foreach($this->modalProduct as $key=>$item){
            $this->modalProduct[$key]['img'] = imgProduct::where('product_id', $item['id'])->get()->toArray();
            $this->modalProduct[$key]['quantity'] = 1;
            $this->modalProduct[$key]['size'] = ProductSize::where('product_id', $item['id'])->get()->toArray();
            $this->modalProduct[$key]['size_id']='';
            $this->modalProduct[$key]['check'] = count(Wishlist::where([['product_id', $this->modalProduct[$key]['id']],['user_id', Auth::id()]])->get());
        }
    }

    public function remove ($id, $key)
    {
        $pro = Wishlist::where([['product_id', $this->modalProduct[$key]['id']],['user_id', Auth::id()]])->get();
        $pro -> delete();
        $this->modalProduct[$key]['check'] = 0;
    }

    public function add($id, $key)
    {
        Wishlist::create([
            'product_id' => $this->modalProduct[$key]['id'],
            'user_id' => Auth::id(),
        ]);
        $this->modalProduct[$key]['check'] = 1;
    }

    public function render()
    {
        return view('livewire.modal-product');
    }
}
