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
      for ($i=0; $i < 3 ; $i++) {
        User::create(['name'=>$faker->name, 'email'=>$faker->freeEmail, 'password'=>$faker->password]);
      }
    }
}
