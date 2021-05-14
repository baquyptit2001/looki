<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable = ['user_id', 'phone', 'address', 'total_price', 'note', 'status', 'cus_name'];
    use HasFactory;

    public function account(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function detail(){
        return $this->hasMany('App\Models\orderDetail', 'order_id', 'id');
    }
}
