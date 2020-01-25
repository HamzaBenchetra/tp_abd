<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Etat-Contrat;
use Faker\Generator as Faker;

$factory->define(Etat-Contrat::class, function (Faker $faker) {

    return [
        'LIBETATCONT' => $faker->word
    ];
});
