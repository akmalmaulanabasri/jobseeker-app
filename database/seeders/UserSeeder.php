<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'phone' => '0812345678',
                'address' => 'Jl. Jalan No. 2',
                'password' => bcrypt('admin'),
                'description' => 'farmer of the website',
                'profile_picture' => '',
                'role' => 'farmer',
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'phone' => '0812345678',
                'address' => 'Jl. Kemana No. 2',
                'password' => bcrypt('user'),
                'description' => 'user of the website',
                'profile_picture' => '',
                'role' => 'user',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
