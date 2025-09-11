<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('admin')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'post_count' => 12,
                'type' => 'superadmin',
                'created_at' => '2025-07-30 13:31:56',
                'updated_at' => '2025-08-27 10:00:18',
            ],
        ]);
    }
}
