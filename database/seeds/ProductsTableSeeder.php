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
        $products = factory(App\Models\Product::class, 10)->create();
        $categories = Category::getAllParentsWithChildren();

        foreach ($products as $product) {
            $randomCategory = $categories[rand(0, $categories->count() -1 )];
            $children = $randomCategory->childrenCategories;
            $randomChild = $children[rand(0, $children->count() - 1)];
            $categoryIds = [$randomCategory->id, $randomChild->id];

            $product->categories()->attach($categoryIds);
        }
    }
}
