<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->lastname,
        'lastsurname' => $faker->lastname,
        'bloodtype' => $faker->randomElement(['a','b','c']),
        // 'user_id' => factory('App\User')->create()->id,
        'user_id' => '1',
        'group_id' => factory('App\Group')->create()->id,
    ];
});
