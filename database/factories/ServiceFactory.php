<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        //
        'user_id' => rand(1, 30),
        'category_id' => rand(1, 20),
        'name' => $title,
        'slug' => str_slug($title),
        'filepdf' => $faker->text(100),
        'excerpt' => $faker->text(200),
        'file' => $faker->imageUrl($width = 800, $height = 600),
        // 'status' => $faker->randomElement(['PUBLISHED']),
    ];
});
