<?php

use Faker\Generator as Faker;

$factory->define(App\Portfolio::class, function (Faker $faker) {
    return [
        //
        'user_id' => rand(1, 30),
        'post_id' => rand(1, 300),
        'film' 	  => $faker->randomElement(['<iframe width="854" height="480" src="https://www.youtube.com/embed/YDXxJ4aTSz4" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>','<iframe width="854" height="480" src="https://www.youtube.com/embed/PO-SN1lmTdU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>']),
        'body'    => $faker->text(100), 
    ];
});
