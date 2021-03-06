<?php

use Faker\Generator as Faker;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\CharacteristicValue::class, function (Faker $faker) use ($factory) {
    return [
        'value' => ucfirst($faker->word),
        'characteristic_id' => $faker->numberBetween($min = 1, $max = 5)
    ];
});
