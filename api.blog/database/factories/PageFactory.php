<?php

use Faker\Generator as Faker;
use Carbon\Carbon;
use App\User;
use App\Page;

$factory->define(App\Page::class, function (Faker $faker) {
    $now = Carbon::now();
    return [
        'title' => $slug = $faker->unique()->sentence($nbWords = 6, $variableNbWords = true),        
        'slug' => str_slug($slug),
        'thumbnail' => 'https://placeimg.com/640/480/nature/'.mt_rand(1,99),
        'description' => $faker->sentence($nbWords = 100, $variableNbWords = true),
        'body' => '<p>' . $faker->text(1000) . '</p>',
        'published' => rand(0,1),
        'user_id' => User::whereNotIn('id', [1])->inRandomOrder()->first()->id,
        'created_at' => $now,
    ];
});
