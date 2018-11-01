<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / x your application's database.
|
*/

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'image_url' => $faker->imageUrl(),
        'title' => $faker->realText($faker->numberBetween(10,20)),
        'author' => $faker->name,
        'likes_count' => $faker->randomNumber(3),
        'slug' => $faker->slug,
    ];
});
