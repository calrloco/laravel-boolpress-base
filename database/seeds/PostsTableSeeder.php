<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $users = User::all();
        for ($i = 0; $i < 50; $i++) {
            $postNew = new Post();
            $postNew->title = $faker->text(100);
            $postNew->body = $faker->text(500);
            $postNew->user_id = $users->random()->id;
            $postNew->save();
        }
    }
}
