<?php

use Faker\Generator as Faker;

$factory->define(App\Precategory::class, function (Faker $faker) {
    $title = $faker->sentence(4); 
    return [
        'name'			 => $title,
        'slug' 			 => str_slug($title),
    ];
});
