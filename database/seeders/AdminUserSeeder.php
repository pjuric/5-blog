<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Seed admin user.
     */
    public function run()
    {
        if (!User::where('admin', true)->exists()) {
            User::create([
                'name'     => 'Admin User',
                'email'    => 'admin@email.com',
                'password' => Hash::make('password'),
                'admin'    => true,
            ]);
        }
    }
}
