<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use App\Post;
use App\User;
use Faker\Generator as Faker;

// $factory->define(Image::class, function (Faker $faker) {
//     return [
//         'url' => $faker->title(),
//         'imageable_id' => 2,
//         'imageable_type' => User::class
//     ];
// });

$factory->define(Image::class, function (Faker $faker) {
    return [
        'url' => $faker->title(),
        'imageable_id' => 3,
        'imageable_type' => Post::class
    ];
});

