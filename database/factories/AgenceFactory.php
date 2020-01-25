<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Agence;
use Faker\Generator as Faker;

$factory->define(Agence::class, function (Faker $faker) {

    return [
        'NOMAG' => $faker->word,
        'NBREMPLOYES' => $faker->randomDigitNotNull,
        'NUMPAYS' => $faker->randomDigitNotNull
    ];
});
