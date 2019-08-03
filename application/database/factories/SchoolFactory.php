<?php

use Faker\Generator as Faker;

$factory->define(App\Models\School::class, function (Faker $faker) {
    return [

        'name' => $faker->company,

        'address' => $faker->address,

        'phone' => $faker->tollFreePhoneNumber,

        'email' => $faker->companyEmail,

        'logo' => 'logo.png',

        'letterhead' => 'logo.png',


    ];
});
