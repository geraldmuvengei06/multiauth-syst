<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Department::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,

        'campus_id' => function() {

            return App\Models\Campus::all()->random();

        }
    ];
});
