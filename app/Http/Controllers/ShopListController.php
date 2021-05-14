<?php

namespace App\Http\Controllers;
use App\Models\Brand;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopListController extends Controller
{
    public function index(Request $request){
        $product = Product::paginate(9);
        $products = Product::all();
        $total = count($products);
//        foreach ($product as $item){
//            $total++;
//        }
        $request->session()->put('view', 1);
        return view('front-end.page.shop-list', compact('product', 'total'));
    }

    public function menu(Request $request){
        $request->session()->forget('view');
        $request->session()->put('view', 1);
    }

    public function list(Request $request){
        $request->session()->forget('view');
        $request->session()->put('view', 2);
    }

    public function brand($id)
    {
        $brand = Brand::find($id);
        $product = Product::where('brand_id', $id)->get();
        return view('front-end.page.brand', compact('product', 'brand'));
    }
}
