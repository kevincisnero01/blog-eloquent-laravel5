<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'user_id' => $fakerr->rand(1,5),
        'body' => $faker->text

    ];
});
