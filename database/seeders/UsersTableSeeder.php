<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'username' => 'adminuser',
                'email_verified_at' => null,
                'password' => '$2y$12$qCyFVGJO3PNcM92f6kkrO.rmANjGYDxmt41FrRVmLwQPSTAbDdVPm',
                'role' => 'admin',
                'remember_token' => 'sziFy24gGRE1CBxDVmvrzYUpT4XV3J9qUWoB7WldzIqTqlDakhjGcnR43Cpa',
                'created_at' => '2025-07-30 13:31:56',
                'updated_at' => '2025-07-31 00:28:01',
            ],
        ]);
    }
}
