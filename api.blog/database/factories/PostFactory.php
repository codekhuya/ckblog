<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Post::class, function (Faker $faker) {

    return [
        //
        'title' => $slug = $faker->unique()->sentence($nbWords = 6, $variableNbWords = true) ,
        'slug' => str_slug($slug),
        'thumbnail' => 'https://placeimg.com/640/480/nature/'.mt_rand(1,99),
        'description' => $faker->sentence($nbWords = 100, $variableNbWords = true),
        'body' => $faker->sentence($nbWords = 999, $variableNbWords = true),
        'published' => mt_rand(0, 1),
        'view_count' => mt_rand(99, 9999),
        'share_count' => mt_rand(1, 99),
        'user_id' => User::whereNotIn('id', [1])->inRandomOrder()->first()->id,
    ];
});
