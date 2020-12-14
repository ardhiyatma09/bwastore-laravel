<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'users_id' => '6',
        'categories_id' => '5',
        'price' => '140000',
        'description' => '<p>' . $faker->paragraph . '</p>',
        'slug' => ''
    ];
});
