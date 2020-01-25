<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Users;
use Faker\Generator as Faker;

$factory->define(Users::class, function (Faker $faker) {

    return [
        'NAME' => $faker->word,
        'EMAIL' => $faker->word,
        'EMAIL_VERIFIED_AT' => $faker->date('Y-m-d H:i:s'),
        'PASSWORD' => $faker->word,
        'REMEMBER_TOKEN' => $faker->word,
        'CREATED_AT' => $faker->date('Y-m-d H:i:s'),
        'UPDATED_AT' => $faker->date('Y-m-d H:i:s')
    ];
});
