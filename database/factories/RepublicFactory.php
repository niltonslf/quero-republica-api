<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Republic;
use Faker\Generator as Faker;

$factory->define(Republic::class, function (Faker $faker) {
    return [
        "name" => $faker->text($maxNbChars = 20),
        "price" => $faker->randomFloat($nbMaxDecimals = 2),
        "city" => $faker->city(),
        "state" => $faker->state(),
        "picture" => $faker->imageUrl($width = 600, $height = 300, 'city', true),
        "description" => $faker->text(),
    ];
});