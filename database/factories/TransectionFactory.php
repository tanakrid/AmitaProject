<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Transection;
use Faker\Generator as Faker;

$factory->define(Transection::class, function (Faker $faker) {
    return [
        // 'rating' => $faker->randomElement($array = array (
        //     'SOLD', 'INBASKET'
        //     , 'OUTBASKET', 'ADDPRODUCT', 'REMOVEPRODUCT', 'EDITPRODUCT')) 
    ];
});
