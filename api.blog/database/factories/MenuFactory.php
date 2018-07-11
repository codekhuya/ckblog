<?php

use Faker\Generator as Faker;
use App\Menu;
use App\Post;
use App\Page;
use App\Category;

$factory->define(App\Menu::class, function (Faker $faker) {
    $id_post = Post::inRandomOrder()->first()->id;
    $id_page = Page::inRandomOrder()->first()->id;
    $id_category = Category::inRandomOrder()->first()->id;

    return [
        //
        'title' => $faker->unique()->sentence($nbWords = rand(1,3), $variableNbWords = true),
        // 'url' => null,
        'parent_id' => Menu::inRandomOrder()->first()->id,
        'menuable_id' => $faker->randomElement($id = array ($id_post,$id_page,$id_category)),
        'menuable_type' => $faker->randomElement($type = array ('post','page','category')),
    ];
});
