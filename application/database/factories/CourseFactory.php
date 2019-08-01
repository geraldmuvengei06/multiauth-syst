<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Course::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,

        'code' => $faker->word,
        
        'department_id' => function() {

            return App\Models\Department::all()->random();

        }
    ];
});
