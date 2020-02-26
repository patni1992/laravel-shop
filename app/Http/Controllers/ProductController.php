<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        return view('pages.product-details', [
            'product' => $product->load('attributes.attribute', 'attributes.attributeValue')
            ]);
    }
}