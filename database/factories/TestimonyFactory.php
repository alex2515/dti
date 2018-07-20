<?php

use Faker\Generator as Faker;

$factory->define(App\Testimony::class, function (Faker $faker) {
    return [
        'name'			=> $faker->sentence(3),
        'profession' 	=> $faker->sentence(3),
        'description' 	=> $faker->text(100),
        'file'			=> $faker->imageUrl($width = 400, $height = 400),
    ];
});
