<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        $faker = Faker::create();
        foreach(range(1,100) as $index){
            DB::table('units')->insert([
                'name' => $faker->name,
                'phone' => $faker->phonenumber,
                'email' => $faker->email,

            ]);
        }
    }
}
