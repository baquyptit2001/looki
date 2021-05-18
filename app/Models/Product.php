<?php

namespace App\Models;

use App\Models\Wishlist;
use Laravel\Scout\Searchable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use Searchable;

    public $fillable = ['name', 'category_id', 'price', 'sale_price', 'image', 'description','size', 'brand_id'];

    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    public function brand(){
        return $this->belongsTo('App\Models\Brand', 'brand_id', 'id');
    }

    public function img(){
        return $this->hasMany('App\Models\imgProduct', 'product_id', 'id');
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

    public function searchableAs()
    {
        return 'products_index';
    }

}