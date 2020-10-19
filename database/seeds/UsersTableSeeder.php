<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i <10;$i++){
             $userNew = new User();
             $userNew->name = $faker->name;
             $userNew->email = $faker->email;
             $userNew->password = $faker->name;
             $userNew->save();
        }
    }
}
