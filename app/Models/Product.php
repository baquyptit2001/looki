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

    // public function size(){
    //     return $this->hasMany('App\Models\productSize', 'product_id', 'id');
    // }

    public function searchableAs()
    {
        return 'products_index';
    }

}