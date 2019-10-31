<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(['a','b','c']),
        'grade' => $faker->randomElement(['1°','2°','3°','4°','5°','6°'])
    ];
});
