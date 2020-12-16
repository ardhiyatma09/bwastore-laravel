<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $name = $faker->name;
    $slug = Str::slug($name);
    return [
        'name' => $name,
        'users_id' => '1',
        'categories_id' => $faker->numberBetween(1,6),
        'price' => '140000',
        'description' => '<p>' . $faker->paragraph . '</p>',
        'slug' => $slug
    ];
});
