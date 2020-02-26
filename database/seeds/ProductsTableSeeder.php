<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

   
    public function run()
    {
        $data = [[
            'name' => 'Macbook Pro',
            'categorySlugs' => ['computer', 'laptop'],
            'featured_image' => 'storage/macbook-pro.jpg',
            'price' => 1400
        ],
        [
            'name' => 'Apple iPhone 11 64GB',
            'categorySlugs' => ['mobile', 'phone'],
            'featured_image' => 'storage/iphone11.jpg',
            'price' => 700
        ],
        [
            'name' => 'Acer Nitro 5 - 15,6',
            'categorySlugs' => ['computer', 'laptop'],
            'featured_image' => 'storage/acer-nitro-front.png',
            'price' => 350
        ],
        [
            'name' => 'Sony PS4 Playstation 4 Pro',
            'categorySlugs' => ['gaming', 'ps4'],
            'featured_image' => 'storage/ps4.jpg',
            'price' => 229
        ],
    ];
        
        $i = 0;
        $products = factory(App\Models\Product::class, count($data))->make();
        foreach($products as $product) {
            $product->name = $data[$i]['name'];
            $product->featured_image = $data[$i]['featured_image'];
            $product->price = $data[$i]['price'];
            $product->save();
            $categoryIds = Category::all()->whereIn('slug', $data[$i]['categorySlugs']);
            $product->categories()->attach($categoryIds);
            $i++;
        }
    }
}
