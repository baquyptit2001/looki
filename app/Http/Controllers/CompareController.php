<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Helper\CompareHelper;

class CompareController extends Controller
{
    public function index(){
        return view('front-end.page.compare');
    }

    public function add(CompareHelper $compare,$id)
    {
        $product = Product::find($id);
        $compare -> add($product);
        return redirect()->back();   
    }

    public function delete(CompareHelper $compare, $id)
    {
        $compare->delete($id);
        return redirect()->back();
    }
}
