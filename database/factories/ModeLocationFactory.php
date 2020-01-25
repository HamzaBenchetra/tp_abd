<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ModeLocation;
use Faker\Generator as Faker;

$factory->define(ModeLocation::class, function (Faker $faker) {

    return [
        'DESCMODELOC' => $faker->word
    ];
});
