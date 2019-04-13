<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        "make" => $faker->randomElement(['Ford', 'Honda', 'Toyota']),
        "model" => $faker->randomElement(['model-1', 'model-2', 'model-3']),
        "year" => $faker->year
    ];
});
