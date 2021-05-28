<?php

use Faker\Generator as Faker;

$factory->define(App\Video::class, function (Faker $faker) {
    return [
        'category_id' => $fake->rand(1,5),
        'user_id' => $fake->rand(1,5),
        'name' => $fake->sentence
    ];
});
