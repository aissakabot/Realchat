<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Models\Category;
use App\Models\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    $title=$faker->sentence();
    return [
        //
     'title' => $title,
      'body' => $faker->text,
     'slug'  => Str::slug($title),
     'category_id' => function(){
         return Category::all()->random();
     },
     'user_id' => function(){
        return User::all()->random();
    }
    
     
    ];
});
