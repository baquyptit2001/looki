<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishListController extends Controller
{
    public function index(){
        return view('front-end.page.wishlist');
    }
}
