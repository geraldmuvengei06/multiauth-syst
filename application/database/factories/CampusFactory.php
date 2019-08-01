<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Campus::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,
        
        'address' => $faker->address,
        
        'phone' => $faker->randomNumber($nbDigits = 9),
        
        'email' => $faker->email,

        'school_id' => function() {

            return App\Models\School::all()->random();

        }
    
    ];
});
