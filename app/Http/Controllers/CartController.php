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
        return response()->json(['message' => 'ok'], 200);
    }
}
