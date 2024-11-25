<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i=0; $i < 20 ; $i++) { 
            $dummyData = [
                'id' => $faker->unique()->uuid(),
                'role_id' => $faker->randomElement(['1','2']),
                'avatar' => $faker->imageUrl(),
                'full_name' => $faker->name(),
                'email' => $faker->freeEmail(),
                'phone_number' => $faker->phoneNumber(),
                'email_verified_at' => $faker->dateTime(),
                'password' => Hash::make($faker->randomElement(['password','alt-password'])),
                'created_at' => $faker->dateTime(now()),
            ];

            DB::table('users')->insert($dummyData);
        }
    }
}
