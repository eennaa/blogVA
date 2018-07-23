<?php



$factory->define(App\Post::class, function (Faker\Generator $faker) {


   
  
    return [

      'title' => $faker->sentences(1, true),
      'body' => $faker->text(255),
      'published' => true

        
    ];

});

