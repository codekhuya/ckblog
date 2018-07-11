<?php

use App\User;
use App\Post;
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
        $user_id = User::inRandomOrder()->first()->id;
        $post_id = Post::inRandomOrder()->first()->id;
        $class_type = ['post', 'user'];
    return [
        //
        'content' => $faker->sentence($nbWords = 10, $variableNbWords = true),
        'commentable_id' => rand($user_id, $post_id),
        // 'commentable_type' => mt_rand($class_type),
        'commentable_type' => $faker->randomElement($class_type = array ('post', 'user')),
        'status' => mt_rand(0,1),
    ];
});
