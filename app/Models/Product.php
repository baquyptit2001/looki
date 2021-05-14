<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

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