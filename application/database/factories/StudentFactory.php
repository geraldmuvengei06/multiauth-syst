<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Student::class, function (Faker $faker) {
    return [
        //
        'first' => $faker->title,

        'last' => $faker->lastName, 

        'surname' => $faker->lastName, 

        'admission_number' => $faker->randomNumber( $nbDigits = 4, $strict = true), 

        'phone' => $faker->e164PhoneNumber, 

        'email' => $faker->safeEmail, 

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
