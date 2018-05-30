<?php

use Faker\Generator as Faker;

$factory->define(App\Work::class, function (Faker $faker) {
    return [
        'code' => $faker->ean13,
        'name' => $faker->sentence,
        'category_id' => function() {
            return factory(\App\WorkCategory::class);
        }
    ];
});
