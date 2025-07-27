<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // Create or update the admin user by email (unique identifier)
        $user = User::updateOrCreate(
            ['email' => 'admin@example.com'],  // Unique field for lookup
            [
                'name' => 'Admin User',
                'username' => 'adminuser',     // Added username here
                'password' => Hash::make('adminTest1'),
                'role' => 'admin',
            ]
        );

        // Create or update the admin record linked to this user
        Admin::updateOrCreate(
            ['user_id' => $user->id],
            ['type' => 'superadmin']  // admin type
        );
    }
}

