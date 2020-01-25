<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Vehicule;
use Faker\Generator as Faker;

$factory->define(Vehicule::class, function (Faker $faker) {

    return [
        'COULEUR' => $faker->word,
        'AGE' => $faker->randomDigitNotNull,
        'NUMMOD' => $faker->randomDigitNotNull,
        'NUMAG' => $faker->randomDigitNotNull,
        'NUMTYPE' => $faker->randomDigitNotNull,
        'NUMCAT' => $faker->randomDigitNotNull
    ];
});
