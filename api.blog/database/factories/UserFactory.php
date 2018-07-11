<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    // return [
    //     'name' => $faker->name,
    //     'email' => $faker->unique()->safeEmail,
    //     'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
    //     'remember_token' => str_random(10),
    // ];

    $now = Carbon::now();
    $gender = ['male','female','other'];
    return [
        'name' => $slug=$faker->name,
        'email' => $faker->unique()->freeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        // 'password' => bcrypt('123456'),
        'avatar' => 'https://placeimg.com/640/480/people/'.rand(1,99),
        'phone' => $faker->tollFreePhoneNumber,
        'address' => $faker->address,
        // 'gender' => mt_rand($gender),
        'gender' => $faker->randomElement($gender = array ('male','female','other')),
        'remember_token' => str_random(10),
        'created_at' => $now,
    ];
});
