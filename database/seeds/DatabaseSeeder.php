<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AttributesTableSeeder::class);
         $this->call(AttributeValuesTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(ProductsTableSeeder::class);
         $this->call(ProductAttributesSeeder::class);
    }
}
