<?php

namespace App\Models;

use App\Models\Wishlist;
use App\Models\ProductSize;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    public $fillable = ['name', 'category_id', 'image', 'description', 'brand_id', 'status'];

    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    public function brand(){
        return $this->belongsTo('App\Models\Brand', 'brand_id', 'id');
    }

    public function img(){
        return $this->hasMany('App\Models\imgProduct', 'product_id', 'id');
    }

    public function size(){
        return $this->hasMany(ProductSize::class, 'product_id', 'id')->orderBy('size', 'asc');
    }

    public function check(){
        if(Auth::check()){
            if(count(Wishlist::where([
                ['product_id', '=', $this->id],
                ['user_id', '=', Auth::id()]
            ])->get()))
                return true;
        }
        return false;
    }

    public function isSale()
    {
        $sale = $this->size;
        foreach ($sale as $item) {
            if($item->sale_price > 0)
                return 1;
        }
        return 0;
    }

    public function minPrice()
    {
        $minS = 9999999999.00;
        if($this->isSale()){
            $minS = $this->size->where('sale_price','>',0)->min('sale_price');
        }
        $min = $this->size->min('price');
        return ($min<$minS) ? $min:$minS;
    }

    public function searchableAs()
    {
        return 'products_index';
    }

}