<?php

namespace App;

use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;

class Cart
{
    protected $data = null;

    public function __construct() {
       $this->data = Session::has('cart') ? Session::get('cart') : [
           "totalPrice" => 0,
           "totalItems" => 0,
           "items" => []
       ];
    }

    public function add(Product $product) {
        $item = [
            'quantity' => 0,
            'price' => 0,
            'productId' => $product->id
        ];

        if(array_key_exists($product->id, $this->data['items'])) {
            $item = $this->data['items'][$product->id];
        }

        $item['quantity']++;
        $item['price'] += $product->price;

        $this->data['items'][$product->id] = $item;
        $this->data['totalPrice'] += $product->price;
        $this->data['totalItems'] ++;

        Session::put('cart', $this->data);
    }

    public function remove(Product $product) {

        if(array_key_exists($product->id, $this->data['items'], )) {
            $this->data['totalPrice'] -= $this->data['items'][$product->id]['price'];
            $this->data['totalItems'] -= $this->data['items'][$product->id]['quantity'];

            unset($this->data['items'][$product->id]);
        }

        Session::put('cart', $this->data);
    }

    public function update(Product $product, int $quantity) {
        if(array_key_exists($product->id, $this->data, )) {
           $this->data['items'][$product->id]['quantity'] = $quantity;
           $this->data['items'][$product->id]['price'] = $quantity * $product->price;

        } else {
            $item = [
                'quantity' => $quantity,
                'price' =>  $product->price * $quantity,
                'productId' => $product->id
            ];    

            $this->data['items'][$product->id] = $item;
        }

        $this->data['totalPrice'] = array_sum(array_column($this->data['items'], 'price'));
        $this->data['totalItems'] = array_sum(array_column($this->data['items'], 'quantity'));

        Session::put('cart', $this->data);
    }
    

    public function all($withProductDetails = false) {
        if($withProductDetails) {
            $products = Product::find(array_keys($this->data['items']))->map(function ($item) {
                return Arr::only($item->toArray(), ['id', 'name', 'price', 'description', 'weight']);
            });

            $newItems = [];

            foreach($products as $value){
                $id = $value['id'];
                $newItems[$id] = $value;
                $newItems[$id]['quantity'] = $this->data['items'][$id]['quantity'];
                $newItems[$id]['totalPrice'] = $this->data['items'][$id]['price'];
              }

              return [
                  'totalPrice' => $this->data['totalPrice'],
                  'totalItems' => $this->data['totalItems'],
                  'items' => $newItems
              ];
           
        }

        return $this->data;
    }
}
