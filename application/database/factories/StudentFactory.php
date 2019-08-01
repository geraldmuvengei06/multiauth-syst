<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Student::class, function (Faker $faker) {
    return [
        //
        'first' => $faker->name,

        'last' => $faker->name, 

        'surname' => $faker->name, 

        'admission_number' => $faker->randomNumber( $nbDigits = 4, $strict = true), 

        'phone' => $faker->randomNumber( $nbDigits = 9), 

        'email' => $faker->email, 

        'date_of_admission' => NOW(), 

        'course_id' => function() {
            return App\Models\Course::get()->random();
        },

        'class_id' => function() {
            return App\Models\Klass::get()->random();
        },

        'campus_id' => function() {
            return App\Models\Campus::get()->random();
        },

        'school_id' => function() {
            return App\Models\School::get()->random();
        },
    ];
});
