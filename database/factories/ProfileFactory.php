<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'user_id' => rand(1,5),
        'instagram' => $faker->userName,
        'github' => $faker->userName,
        'web' => $faker->url
    ];
});
