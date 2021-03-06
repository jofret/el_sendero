<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4); 
    return [
    	'user_id' 		=>rand(1,30),
        'precategory_id'=>rand(1,4),
    	'category_id'	=>rand(1,20),
        'name' 			=> $title,
        'slug' 			=> str_slug($title),
        'pricing'       => rand(19,180),
        'excerpt' 		=> $faker->text(200),
        'body' 			=> $faker->text(500),
        'file' 			=> $faker->imageUrl($width=800, $height=600),
        'file2'          => $faker->imageUrl($width=800, $height=600),
        'youtube' 		=> $faker->url,
        'status'        => $faker->randomElement(['DRAFT','PUBLISHED']),
    ];
});
