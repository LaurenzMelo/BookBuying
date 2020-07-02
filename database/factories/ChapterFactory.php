<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Chapter;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Chapter::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'chapters' => $faker->numberBetween(10, 50),
        'price' => 1500,
        'unclaimed_download' => $faker->numberBetween(1, 10),
        'total_download' => $faker->numberBetween(10, 50),
        'doi' => $faker->bothify('?#?#?#?#?#')
    ];
});
