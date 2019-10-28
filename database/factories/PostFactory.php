<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'post_name' => $faker->text(200),
        'detail' => $faker->text(200),
        'image_src' => $faker->text(200),
        'view_count' => $faker->numberBetween(100,9999)
    ];
});
