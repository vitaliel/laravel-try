<?php

use Faker\Generator as Faker;

$factory->define(App\WorkCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
    ];
});
