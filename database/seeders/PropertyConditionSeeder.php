<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Baru',
                'slug' => 'baru',
                'created_at' => now()
            ],
            [
                'name' => 'Bekas',
                'slug' => 'bekas',
                'created_at' => now()
            ],
        ];

        DB::table('property_conditions')->insert($data);
    }
}
