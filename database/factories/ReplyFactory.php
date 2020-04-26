<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Models\Reply;
use App\Models\Question;
use Faker\Generator as Faker;


$factory->define(Reply::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
     
     'question_id' => function(){
         return Question::all()->random();
     },
     'user_id' => function(){
        return User::all()->random();
    },
     'body' => $faker->text,
    ];
});
