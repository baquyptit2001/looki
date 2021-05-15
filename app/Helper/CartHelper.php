<?php
namespace App\Helper;
use Session;

class CartHelper {
    public $items = [];

    public function __construct(){
        $this->items = session('cart') ? session('cart') : [];
//        $this->total_price = $this->total();
//        $this->total_quantity = $this->total_qty();
    }

    public function add($product, $quantity=1){
        if($quantity==null)
            $quantity=1;
        $item = [
          'id'=>$product->id,
          'name'=>$product->name,
          'image'=>$product->image,
          'price'=>$product->sale_price>0 ? $product->sale_price : $product->price,
          'quantity'=>$quantity
        ];
        if(isset($this->items[$product->id])){
            $this->items[$product->id]['quantity'] += $quantity;
        }else{
            $this->items[$product->id] = $item;
        }
        session(['cart'=>$this->items]);
    }
    public function update($data, $cart){
        $cart = $cart->items;
        foreach ($data['quantity'] as $key=>$qty){
            foreach ($cart as $keyy=>$val){
                if($val['id']==$key){
                    if($cart[$keyy]['quantity']<=0){
                        $cart[$keyy]['quantity'] = 1;
                    }else{
                        $cart[$keyy]['quantity'] = $qty;
                    }
                }
            }
        }
        session(['cart'=>$cart]);
    }
    public function delete($id){
        if(isset($this->items[$id])){
            unset($this->items[$id]);
        }
        session(['cart'=>$this->items]);
    }
    public function total_price(){
        $total = 0;
        foreach($this->items as $item){
            $total += $item['quantity']*$item['price'];
        }
        return $total;
    }
    public function total_quantity(){
        $total = 0;
        foreach($this->items as $item){
            $total += $item['quantity'];
        }
        return $total;
    }
    public function clear(){
        session(['cart'=>'']);
    }
}
