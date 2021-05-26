<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    public $fillable = ['size', 'product_id', 'price', 'sale_price'];

    public function product(){
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
    use HasFactory;
}
