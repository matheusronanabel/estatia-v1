<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Pemilik Properti',
                'created_at' => now(),
            ],
            [
                'name' => 'Agent',
                'created_at' => now(),
            ],
        ];

        DB::table('user_roles')->insert($data);
    }
}
