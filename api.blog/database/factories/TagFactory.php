<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Tag::class, function (Faker $faker) {
    $now = Carbon::now();
    return [
        'name' => $slug = $faker->unique()->sentence($nbWords = 1, $variableNbWords = true),
        'slug' => 'tag-' . str_slug($slug),
        'created_at' => $now,
    ];
});
