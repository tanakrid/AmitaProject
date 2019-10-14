<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\sheet;
use Faker\Generator as Faker;

$factory->define(sheet::class, function (Faker $faker) {
    return [
        'sheetName' => $faker->text(20),
        'sheetType' => $faker->text(15),
        'autorName' => $faker->text(20),
        'subjectId' => $faker->text(8),
        'secNumber' => (string) $faker->numberBetween(1,200),
        'sheetSrc' => $faker->text(20),
        'instructor' => $faker->text(20),
        'price' => $faker->numberBetween(100,9999)
    ];
});
