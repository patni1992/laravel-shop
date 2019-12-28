<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {

    $name = $faker->sentence;
    $slug = Str::slug($name, '-');

    return [
        'name' => $name,
        'slug' => $slug,
        'description' => $faker->text(),
        'quantity' => $faker->numberBetween(1, 50),
        'active' => 1,
        'price' => $faker->randomFloat(2, 10, 5000),
        'weight' => $faker->randomFloat(2, 10, 1000)
    ];
});
