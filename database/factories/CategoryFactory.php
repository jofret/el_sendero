<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
	$title = $faker->sentence(4); 
    return [
    	'precategory_id' =>rand(1,4),
        'name'			 => $title,
        'slug' 			 => str_slug($title),
        'file' 			=> $faker->imageUrl($width=800, $height=600),
        'body'			 => $faker->text(500),
    ];
});
