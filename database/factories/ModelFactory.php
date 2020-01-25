<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Modele;
use Faker\Generator as Faker;

$factory->define(Modele::class, function (Faker $faker) {

    return [
        'MARQUE' => $faker->word
    ];
});
