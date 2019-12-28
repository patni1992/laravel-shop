<?php

namespace Tests\Feature;

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
}
