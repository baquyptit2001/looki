<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
    public function index(){
        return view('front-end.page.wishlist');
    }

    public function add($id)
    {
        if(count(Wishlist::where([
            ['product_id','=',$id],
            ['user_id','=',Auth::id()],
        ])->get()))
            return redirect()->back();
        Wishlist::create([
            'product_id'=>$id,
            'user_id'=>Auth::id(),
        ]);
        return redirect()->back();
    }

    public function remove($id)
    {
        $fav = Wishlist::find($id);
        $fav->delete();
        return redirect()->back();
    }
}
