<?php

namespace App\Http\Controllers;

use App\Helper\CartHelper;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        $cart = new CartHelper;
        if($cart->total_quantity()==0)
            return redirect()->back();
        return view('front-end.page.checkout');
    }
}
