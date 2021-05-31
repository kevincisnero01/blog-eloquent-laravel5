<?php

use Faker\Generator as Faker;

$factory->define(App\Location::class, function (Faker $faker) {
    return [
        'profile_id' => rand(1,5),
        'country' => $faker->country
    ];
});
