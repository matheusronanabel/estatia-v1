<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Bali',
                'slug' => 'bali',
                'created_at' => now()
            ],
            [
                'name' => 'Jakarta',
                'slug' => 'jakarta',
                'created_at' => now()
            ],
            [
                'name' => 'Bandung',
                'slug' => 'bandung',
                'created_at' => now()
            ],
            [
                'name' => 'Bogor',
                'slug' => 'bogor',
                'created_at' => now()
            ],
            [
                'name' => 'Makassar',
                'slug' => 'makassar',
                'created_at' => now()
            ],
            [
                'name' => 'Bekasi',
                'slug' => 'bekasi',
                'created_at' => now()
            ],
        ];

        DB::table('locations')->insert($data);
    }
}
