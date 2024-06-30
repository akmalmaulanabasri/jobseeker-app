<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'phone' => '1234567890',
            'address' => 'User Address',
            'password' => bcrypt('user'),
            'role' => 'user',
            'description' => 'User Description',
            'profile_picture' => '1',
            'is_available' => '1'
        ]);

        User::create([
            'name' => 'Ujang Maman',
            'email' => 'ujangmaman@gmail.com',
            'phone' => '08772722',
            'address' => 'Kampung sahara',
            'password' => bcrypt('farmer'),
            'role' => 'farmer',
            'description' => 'Jago semua',
            'profile_picture' => '2',
            'is_available' => '1'
        ]);

        User::create([
            'name' => 'Asep Baskom',
            'email' => 'asepsedunia@gmail.com',
            'phone' => '08772722',
            'address' => 'Kampung jakarta',
            'password' => bcrypt('user'),
            'role' => 'user',
            'description' => 'gacor kang',
            'profile_picture' => '2',
            'is_available' => '1'
        ]);
    }
}
