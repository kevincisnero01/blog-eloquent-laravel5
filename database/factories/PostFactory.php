<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'category_id' => rand(1,4),
        'user_id' => rand(1,5),
        'name' => $faker->sentence

    ];
});
