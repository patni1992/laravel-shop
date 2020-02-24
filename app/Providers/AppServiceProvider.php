<?php

namespace App\Providers;

use App\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Arr;
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
        view()->composer('includes.horizontal-bar', function ($view) {
            $view->with('categories', Category::getAllParentsWithChildren());
        });

        view()->composer('layouts.horizontal-master', function ($view) {
            $cart = new Cart();
            $allItems = $cart->all(true);
        
            $view->with('cart', $allItems);
        });
    }
}
