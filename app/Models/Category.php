<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public $fillable = ['name', 'parent_id', 'status'];

    public function child(){
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }
}
