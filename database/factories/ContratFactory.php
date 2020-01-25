<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contrat;
use Faker\Generator as Faker;

$factory->define(Contrat::class, function (Faker $faker) {

    return [
        'DATECONT' => $faker->word,
        'CAUTION' => $faker->randomDigitNotNull,
        'KMDEP' => $faker->randomDigitNotNull,
        'KMRET' => $faker->randomDigitNotNull,
        'ETATCONT' => $faker->randomDigitNotNull,
        'NUMCLI' => $faker->randomDigitNotNull,
        'IMMAT' => $faker->randomDigitNotNull,
        'MODELOC' => $faker->randomDigitNotNull
    ];
});
