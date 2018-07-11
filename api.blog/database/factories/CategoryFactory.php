<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->sentence($nbWords = 10, $variableNbWords = true),
        'slug' => rand($user_id, $post_id),
        // 'parent_id' => null,
        'thumbnail' => 'https://placeimg.com/640/480/animals/grayscale/'.rand(1,99),
        'description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
    ];
});
