<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        // 'detail' => $faker->text(200),
        // 'rating' => $faker->randomElement($array = array (
        //     'GOOD', 'NORMAL', 'BAD')) 
    ];
});
