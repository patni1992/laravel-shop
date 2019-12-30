<?php

namespace App\Http\Controllers;

use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $products =  Product::paginate(9);
        return view('starter', ['products' => $products]);
    }
}
