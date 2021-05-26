<?php
namespace App\Helper;
use Session;

class CompareHelper {
    public $items = [];

    public function __construct(){
        $this->items = session('compare') ? session('compare') : [];
//        $this->total_price = $this->total();
//        $this->total_quantity = $this->total_qty();
    }

    public function add($product)
    {
        $item = [
            'id'=>$product->id,
            'name'=>$product->name,
            'image'=>$product->image,
            'price'=>$product->minPrice(),
            'size'=>$product->size,
            'description'=>$product->description,
        ];
        if(!isset($this->items[$product->id])){
            $this->items[$product->id] = $item;
        }
        session(['compare'=>$this->items]);
    }

    public function delete($id){
        if(isset($this->items[$id])){
            unset($this->items[$id]);
        }
        session(['compare'=>$this->items]);
    }

    public function check($id)
    {
        return isset($this->items[$id]);
    }
}
