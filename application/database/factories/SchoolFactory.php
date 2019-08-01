<?php

use Faker\Generator as Faker;

$factory->define(App\Models\School::class, function (Faker $faker) {
    return [

        'name' => $faker->word,

        'address' => $faker->address,

        'phone' => $faker->randomNumber( $nbDigits = 9),

        'email' => $faker->email,

        'logo' => 'logo.png',

        'letterhead' => 'logo.png',


    ];
});
