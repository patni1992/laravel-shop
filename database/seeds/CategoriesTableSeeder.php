<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Clothing' => ['Woman Shoes', 'Men\'s Shirts'],
            'Handy' => ['Smartphones', 'Smartwatches ']
        ];
        
        foreach ($data as $category => $subCategories)
        {
            $id = Category::create(['name' => $category])->id;
        
            foreach ($subCategories as $subCategory) {
              Category::create([
                    'parent_id' => $id,
                    'name' => $subCategory,
                ]);
            }
        }
    }
}
