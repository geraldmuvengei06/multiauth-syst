<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Klass::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->word,

        'year' => 2019,

        'starts' => NOW(),

        'ends' => NOW(),

        'course_id' => function() {
            return App\Models\Course::get()->random();
        },

        'department_id' => function() {
            return App\Models\Department::get()->random();
        },

        'campus_id' => function() {
            return App\Models\Campus::get()->random();
        },
    ];
});
