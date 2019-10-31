<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Homework;
use Faker\Generator as Faker;

$factory->define(Homework::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6, true),
        'description' => $faker->paragraph(1),
        'matter_id' => factory('App\Matter')->create()->id
    ];
});
