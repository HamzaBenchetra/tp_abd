<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {

    return [
        'NOMCLI' => $faker->word,
        'PRENOMCLI' => $faker->word,
        'ADRCLI' => $faker->word,
        'NUMPERMIS' => $faker->randomDigitNotNull,
        'TELCLI' => $faker->word,
        'CPDI' => $faker->randomDigitNotNull
    ];
});
