<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
	$title = $faker->sentence(4);
    return [
        //
        'name' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text(500),
        'type' => $faker->randomElement(['EVENT', 'SERVICE']),
        'icon' => $faker->randomElement(['fa-building','fa-database','fa-graduation-cap','fa-industry']),
        'file' => 'ion-ios-analytics-outline',
    ];
});
