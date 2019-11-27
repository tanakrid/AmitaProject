<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sheet;
use Faker\Generator as Faker;

$factory->define(Sheet::class, function (Faker $faker) {
    return [
        'sheet_name' => $faker->text(20),
        'sheet_type' => $faker->text(15),
        'autor_name' => $faker->text(20),
        'subject_id' => $faker->text(8),
        'sec_number' => (string) $faker->numberBetween(1,200),
        'sheet_src' => $faker->text(20),
        'instructor' => $faker->text(20),
        'price' => $faker->numberBetween(100,9999),
        'view_count' => $faker->numberBetween(10, 9999),
        'rating' => $faker->randomElement($array = array('GOOD', 'NORMAL', 'BAD')),
        'sale' => $faker->numberBetween(1,100),
        'income' => $faker->numberBetween(100,9999)
    ];
});
