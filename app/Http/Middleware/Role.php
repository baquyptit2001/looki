<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\Models\Order;
use Illuminate\Http\Request;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {   
        if(Auth::check()&&auth()->user()->role){
            $total = Order::all()->sum('total_price');
            view()->share('total', $total);
            return $next($request);
        }else
            return abort(404);
    }
}
