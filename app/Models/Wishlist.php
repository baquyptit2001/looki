<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    public $fillable = ['product_id', 'user_id'];

    public function product(){
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
}
