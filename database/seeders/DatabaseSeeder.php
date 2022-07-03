<?php

namespace Database\Seeders;
use App\Models\Pressures;
use App\Models\Hights;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create('fr_FR');
        for ($i = 0; $i <= 20; $i++) {
            $pressure = new Pressures;
            $pressure->bar = $faker->numberBetween(1,20);
            $pressure->save();
            $hight=new Hights;
            $hight->meter= $faker->randomNumber(1,20);
            $hight->save();    
       
        }

    
    }
}
