<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ville;
use Faker\Generator as Faker;

$factory->define(Ville::class, function (Faker $faker) {

    return [
        'VILLECLI' => $faker->word
    ];
});
