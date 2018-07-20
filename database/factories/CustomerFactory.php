<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
    	'name' => $faker->sentence(3),
    	'file' => $faker->imageUrl($width = 300, $height = 70),
    ];
});
