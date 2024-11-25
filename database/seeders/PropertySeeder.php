<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\PropertyCategory;
use App\Models\PropertyCondition;
use App\Models\PropertyType;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userIds = User::pluck('id')->toArray();

        $locationIds = Location::pluck('id')->toArray();

        $categoryIds = PropertyCategory::pluck('id')->toArray();

        $conditionIds = PropertyCondition::pluck('id')->toArray();

        $typeIds = PropertyType::pluck('id')->toArray();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 1500 ; $i++) { 
            $dummyData = [
                'user_id' => $faker->randomElement($userIds),
                'location_id' => $faker->randomElement($locationIds),
                'category_id' => $faker->randomElement($categoryIds),
                'condition_id' => $faker->randomElement($conditionIds),
                'type_id' => $faker->randomElement($typeIds),
                'code' => $faker->unique()->numerify('EST######'),
                'cover_image' => 'image/sample.png',
                'images' => $faker->imageUrl(),
                'title' => $faker->words(8, true),
                'slug' => $faker->slug(),
                'description' => $faker->paragraph(3,true),
                'number_of_bedroom' => $faker->randomDigit(),
                'number_of_bathroom' => $faker->randomDigit(),
                'price_idr' => $faker->randomFloat(2,500000000,7500000000),
                'price_usd' => $faker->randomFloat(2,250000,800000),
                'building_size' => $faker->randomFloat(2,100,500),
                'land_size' => $faker->randomFloat(2,300,700),
                'publication_status' => $faker->randomElement(['published','draft']),
                'created_at' => $faker->dateTime(now()),
            ];

            DB::table('properties')->insert($dummyData);
        }

    }
}
