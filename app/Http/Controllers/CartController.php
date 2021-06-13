<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Jobs\SendEmail;
use App\Models\Product;
use App\Helper\CartHelper;
use App\Models\orderDetail;
use App\Models\ProductSize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{

    public function add(CartHelper $cart, $id, Request $req){
        try {
            //code...
            // dd($req);
            $product = Product::find($id);
            $size = ProductSize::find($req->product_size);
            $cart->add($product, $size->id, $req->quantity);
        } catch (\Throwable $th) {
            return redirect()->back();
        }
        return redirect()->back();
    }
    public function cartCheckout(Request $req, CartHelper $cart)
    {
        if(!Auth::check())
            return redirect()->back();
        $array_rules = [
            'cus_name' => 'bail|required',
            'address' => 'bail|required',
            'phone' => 'bail|required|digits:10|numeric',
            'email'=>'bail|required|email'
        ];
        $messages = [
            'cus_name.required' => 'Tên người nhận  không được bỏ trống',
            'phone.required' => 'Số điện thoại không được bỏ trống',
            'phone.digits' => 'Số điện thoại không hợp lệ',
            'phone.numeric' => 'Số điện thoại không hợp lệ',
            'address.required' => 'Địa chỉ không được bỏ trống',
            'email.required' => 'Email không được bỏ trống',
            'email.email' => 'Email không hợp lệ',
        ];
        $this->validate($req,$array_rules, $messages);
        $req->merge(['user_id'=>Auth::id(), 'total_price'=>$cart->total_price()]);
        $order = Order::create($req->all());
        $detail = [];
        $i=0;
        foreach($cart->items as $item){
            $detail[$i++] = orderDetail::create([
                'order_id'=>$order->id,
                'product_id'=>$item['product_id'],
                'quantity'=>$item['quantity'],
                'price'=>$item['price'],
                'size_id'=>$item['id']
            ]);
        }
        $cart->clear();
        SendEmail::dispatch($order,$detail, $req->email)->delay(now()->addMinute(1));
        return view('front-end.page.invoice', compact('order', 'detail'));
    }
    public function index(CartHelper $cart){
        return view('front-end.page.cart');
    }
    public function update(Request $req, CartHelper $cart){
        $cart->update($req, $cart);
        return redirect()->back();
    }
    public function delete($id, CartHelper $cart){
        $cart->delete($id);
        return redirect()->back();
    }


    public function listCart(){
        $order = Order::orderBy('status', 'desc')->get();
        return view('admin.page.order.index', compact('order'));
    }
    public function cancelOrder($id)
    {
        $order = Order::find($id);
        if($order->status != 0)
            return redirect()->back();
        $order -> update(['status' => -2]);
        return redirect()->back();
    }
    public function status($id)
    {
        $order = Order::find($id);
        if($order->status<0)
            return redirect()->back();
        if($order->status == 0)
            $order->update(['status' => 1]);
        else
            $order->update(['status' => -1]);
        return redirect()->back();
    }
    public function detail($id)
    {
        $order = Order::find($id);
        $detail = Order::find($id)->detail;
        return view('admin.page.order.detail', compact('detail', 'order'));
    }
    public function updateOrder(Request $request, $id)
    {
        $order = Order::find($id);
        if($order->status!=0)
            abort(404);
        $order->update($request->all());
        return redirect()->back();
    }
}
