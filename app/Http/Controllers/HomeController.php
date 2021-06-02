<?php

namespace App\Http\Controllers;


use App\Models\Brand;
use App\Models\Comment;
use App\Models\Product;
use App\Models\imgProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        $product = Product::inRandomOrder()->get();
        $new_product =Product::orderBy('created_at', 'DESC')->limit(5)->get();
        $brand = Brand::all();
        return view('front-end.page.home', compact('product', 'new_product', 'brand'));
    }
    public function detail($id){
        $pro = Product::find($id);
        $img = imgProduct::where('product_id', $id)->get();
        $rate = Comment::where('product_id', $id)->orderBy('created_at', 'desc')->limit(3)->get();
        // dd($rate);
        $like = Product::inRandomOrder()->limit(5)->get();
        return view('front-end.page.product-detail', compact('pro', 'img', 'rate', 'like'));
    }
    public function rate(Request $request, $id)
    {
        $request->merge(['user_id'=>Auth::id(),'product_id'=>$id]);
        Comment::create($request->all());
        return redirect()->back();
    }
}
