<?php

use App\Models\Attribute;
use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attribute::insert([
            ['name' => 'Ram'],
            ['name' => 'Hard Drive'],
            ['name' => 'Resolution'],
            ['name' => 'Process'],
            ['name' => 'Tv connection'],
            ['name' => 'HDR'],
            ['name' => 'Graphics']
        ]);
    }
}
