<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\user;
use Faker\Guesser\Name;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Schema;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function definition()
    {
        //$faker = Faker\Seeder::create();
        //return[
          //  'name' => $faker->name(),
            //'email' => $faker->email(),
            //'role_id' => Arr::random(['admin','alumni'])
        //];
    }
}
