<?php

use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Product;
use App\Models\ProductAttribute;
use Illuminate\Database\Seeder;

class ProductAttributesSeeder extends Seeder
{

    protected function addAttrToProduct($productSlug, $attrName, $attrValue) 
    {
        $product = Product::where('slug', $productSlug)->first();
        $attr = Attribute::where('name', $attrName)->first();
        $attrValue = AttributeValue::where('value', $attrValue)->first();
        $product->attributes()->create([
            'attribute_id' => $attr->id,
            'attribute_value_id' => $attrValue->id
        ]);
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addAttrToProduct('macbook-pro', 'Ram', '16gb');
        $this->addAttrToProduct('macbook-pro', 'Hard Drive', 'SSD 256gb');
        $this->addAttrToProduct('macbook-pro', 'Resolution', '2560 x 1600');
        $this->addAttrToProduct('macbook-pro', 'Process', 'Core i7');

    }
}
