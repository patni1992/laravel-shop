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
            'Computer' => ['Desktop', 'Laptop'],
            'Mobile' => ['Phone', 'Smartwatch'],
            'Gaming' => ['Xbox One', 'PS4', 'Nintendo Switch']
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
