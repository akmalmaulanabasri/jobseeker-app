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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => '1234567890',
            'address' => 'admin Address',
            'password' => bcrypt('admin'),
            'role' => 'admin',
            'description' => 'admin Description',
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

        $jasa = [
            [
                'nama' => 'Sanitasi Lahan',
                'harga' => '187',
                'biaya_admin' => '5',
            ],
            [
                'nama' => 'Pembenihan',
                'harga' => '75',
                'biaya_admin' => '5',
            ],
            [
                'nama' => 'Penanaman',
                'harga' => '175',
                'biaya_admin' => '5',
            ],
            [
                'nama' => 'Pemupukan',
                'harga' => '362',
                'biaya_admin' => '5',
            ],
            [
                'nama' => 'Pemeliharaan',
                'harga' => '375',
                'biaya_admin' => '5',
            ],
            [
                'nama' => 'Panen',
                'harga' => '300',
                'biaya_admin' => '5',
            ],
        ];

        foreach ($jasa as $j) {
            \App\Models\Jasa::create($j);
        }
    }
}
