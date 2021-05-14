<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imgProduct extends Model
{
    use HasFactory;
    public $fillable = ['image', 'product_id'];
}
