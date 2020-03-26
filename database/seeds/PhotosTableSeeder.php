<?php

use Illuminate\Database\Seeder;
use App\Photo;
use App\User;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for($i = 0; $i < User::count(); $i++) {
        for ($j=0; $j < 5; $j++) {
            Photo::create(['user_id'=>User::inRandomOrder()->first()->id]);
        }
      }
    }
}
