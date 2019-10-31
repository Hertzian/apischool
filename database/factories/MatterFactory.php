<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Matter;
use Faker\Generator as Faker;

$factory->define(Matter::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6, true),
        'description' => $faker->paragraph(1),
        'group_id' => factory('App\Group')->create()->id
    ];
});
