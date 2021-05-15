<?php

namespace App\Http\Controllers;
use App\Models\Brand;

use App\Models\Product;
use App\Models\Category;
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
        $cat = Category::where('parent_id', 0)->get();
        return view('front-end.page.shop-list', compact('product', 'total', 'cat'));
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

    public function category($id)
    {
        $category = Category::find($id);
        $product = Product::where('category_id', $id)->get();
        return view('front-end.page.category', compact('product', 'category'));
    }
}
