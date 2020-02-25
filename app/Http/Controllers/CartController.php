<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function addProduct(Product $product)
    {
        $cart = new Cart();
        $cart->add($product);
        return $cart->all();
    }

    public function getCart(Product $product)
    {
        $cart = new Cart();
        return $cart->all();
    }

    public function index(Product $product)
    {
        return view('pages.cart');
    }
}
