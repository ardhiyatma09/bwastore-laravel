<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


$categories = ['Furniture','Gadgets','Make Up','Sneakers','Tools','Baby'];
$factory->define(Category::class, function (Faker $faker)use($categories) {

    $category = $categories[$faker->numberBetween(0,count($categories)-1)];    

    return [
        'name' => $category,
        'photo' => '',
        'slug' => Str::slug($category)
    ];
});
