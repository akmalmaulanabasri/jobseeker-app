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

        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'phone' => '1234567890',
            'address' => 'User Address',
            'password' => bcrypt('user'),
            'role' => 'user',
            'description' => 'User Description'
        ]);
    }
}
