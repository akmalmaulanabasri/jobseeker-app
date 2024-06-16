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
            'profile_picture' => '1'
        ]);
        
        User::create([
            'name' => 'recruiter',
            'email' => 'recruiter@gmail.com',
            'phone' => '1234567890',
            'address' => 'recruiter Address',
            'password' => bcrypt('recruiter'),
            'role' => 'recruiter',
            'description' => 'recruiter Description',
            'profile_picture' => '2'
        ]);
    }
}
