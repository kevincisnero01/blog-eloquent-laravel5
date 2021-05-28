<?php

use Faker\Generator as Faker;

$factory->define(App\Profile::class, function (Faker $faker) {
    return [
        'user_id' => $fake->rand(1,5),
        'instagram' => $fake->userName,
        'github' => $fake->userName,
        'web' => $fake->web
    ];
});
