<?php

use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Database\Seeder;

class AttributeValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attribute::where('name', '=', 'Ram')->first()->attributeValues()->saveMany([
            new AttributeValue(['value' => '8gb']),
            new AttributeValue(['value' => '16gb',])
        ]);

        Attribute::where('name', '=', 'Hard Drive')->first()->attributeValues()->saveMany([
            new AttributeValue(['value' => 'SSD 256gb']),
            new AttributeValue(['value' => 'SSD 512gb',])
        ]);

        Attribute::where('name', '=', 'HDR')->first()->attributeValues()->saveMany([
            new AttributeValue(['value' => 'Yes']),
        ]);

        Attribute::where('name', '=', 'Resolution')->first()->attributeValues()->saveMany([
            new AttributeValue(['value' => '1920 x 1080']),
            new AttributeValue(['value' => '2560 x 1600 ',])
        ]);

        Attribute::where('name', '=', 'Process')->first()->attributeValues()->saveMany([
            new AttributeValue(['value' => 'Core i7']),
        ]);
    }
}
