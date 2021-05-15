<?php

namespace App\Providers;

use App\Models\Wishlist;
use App\Helper\CartHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function($view){
            $view->with([
                'cart'=>new CartHelper(),
                'wishlist'=>Wishlist::where('user_id', Auth::id())->get(),
            ]);
        });
    }
}
