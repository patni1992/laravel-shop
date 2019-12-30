<?php

namespace Tests\Unit;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function add_slug_on_create()
    {  
        $product = Factory(Product::class)->create(['name' => 'Some project']);
        $this->assertEquals('some-project', $product->slug);
    }
}
