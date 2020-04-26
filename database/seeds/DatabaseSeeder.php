<?php

use App\User;
use App\Models\Like;
use App\Models\Reply;
use App\Models\Category;
use App\Models\Question;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Factory(User::class,10)->create();
        Factory(Category::class,5)->create();
        Factory(Question::class,10)->create();
        Factory(Reply::class,50)->create()->each(function($reply){
      return $reply->likes()->save(Factory(Like::class)->make());
        });

    }
}
