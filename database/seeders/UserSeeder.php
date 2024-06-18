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
                'name' => 'Maulana Yusuf',
                'email' => 'maulanayusuf@gmail.com',
                'phone' => '08123450987',
                'address' => 'Jl. Veteran No. 2',
                'password' => bcrypt('12345678'),
                'description' => 'recruiter of the website',
                'profile_picture' => '',
                'role' => 'recruiter',
            ],
            [
                'name' => 'Banyu Nurmanjaya',
                'email' => 'banyu@gmail.com',
                'phone' => '08123450800',
                'address' => 'Jl. Cisarua No. 2',
                'password' => bcrypt('12345678'),
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
