<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    public $fillable = ['product_id', 'order_id', 'price', 'quantity'];
    use HasFactory;

    public function product(){
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
}
