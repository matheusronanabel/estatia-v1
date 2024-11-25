<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Jual',
                'slug' => 'jual',
                'created_at' => now()
            ],
            [
                'name' => 'Sewa',
                'slug' => 'sewa',
                'created_at' => now()
            ],
        ];

        DB::table('property_categories')->insert($data);
    }
}
