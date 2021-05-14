<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productSize extends Model
{
    public $fillable = ['product_id', 'size', 'price','sale_price'];
    use HasFactory;
}
