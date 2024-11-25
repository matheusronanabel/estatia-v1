<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Hotel',
                'slug' => 'hotel',
                'created_at' => now()
            ],
            [
                'name' => 'Villa',
                'slug' => 'villa',
                'created_at' => now()
            ],
            [
                'name' => 'Rumah',
                'slug' => 'rumah',
                'created_at' => now()
            ],
            [
                'name' => 'Tanah',
                'slug' => 'tanah',
                'created_at' => now()
            ],
        ];

        DB::table('property_types')->insert($data);
    }
}
