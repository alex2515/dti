<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
	$title = $faker->sentence(4);
    return [
        //
        'name' => $title,
        'slug' => str_slug($title),
        'body' => $faker->text(200),
        'type' => $faker->randomElement(['EVENT', 'SERVICE']),
        'icon' => $faker->randomElement(['fa fa-building','fa fa-database','fa fa-graduation-cap','fa fa-industry']),
    ];
});
