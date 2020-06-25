<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Journal;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Journal::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'price' => $faker->numberBetween(1000, 5000),
        'unclaimed_download' => $faker->numberBetween(1, 10),
        'total_download' => $faker->numberBetween(10, 50),
        'doi' => $faker->bothify('?#?#?#?#?#')
    ];
});
