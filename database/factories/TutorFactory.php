<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tutor;
use Faker\Generator as Faker;

$factory->define(Tutor::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->lastname,
        'lastsurname' => $faker->lastname,
        'student_id' => factory('App\Student')->create()->id
    ];
});
