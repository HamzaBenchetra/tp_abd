<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Tarifs;
use Faker\Generator as Faker;

$factory->define(Tarifs::class, function (Faker $faker) {

    return [
        'KMFORFAIT' => $faker->randomDigitNotNull,
        'MODELOC' => $faker->randomDigitNotNull,
        'COUTBASE' => $faker->randomDigitNotNull
    ];
});
