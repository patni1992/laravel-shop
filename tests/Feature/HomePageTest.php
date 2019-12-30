<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function rendersWithoutErrors()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function displayListOfProducts()
    {
        $product1 = factory('App\Models\Product')->create();
        $product2 = factory('App\Models\Product')->create();

        $response = $this->get('/');

        $response->assertSee($product1->title);
        $response->assertSee($product2->title);
    }

    /** @test */
    public function displayAllCategoriesWithChildren()
    {
        $parent = Category::create(['name' => 'phone']);
        $child  = Category::create(
            [
                'name' => 'nokia',
                'parent_Id' => $parent->id
            ],
        );

        Category::create(
            [
                'name' => 'samsung',
                'parent_Id' => $child->id
            ]
        );

        $response = $this->get('/');
        $response->assertSee('phone');
        $response->assertSee('nokia');
        $response->assertSee('samsung');
    }
}
