<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Admin',
                'username' => 'admin',
                'role' => 'admin',
                'password' => bcrypt('12345678'),
                'email' => 'admin@gmail.com',
                'nomor_handphone' => 81234567890,
                'alamat' => 'Rajabasa, Bandar Lampung',
                'unit' => 'Tenaga Kependidikan'
            ],

            [
                'name' => 'Staf Aset 1',
                'username' => 'staf1',
                'role' => 'staf_aset',
                'password' => bcrypt('12345678'),
                'email' => 'staf1@gmail.com',
                'nomor_handphone' => 80987654321,
                'alamat' => 'Way Halim, Bandar Lampung',
                'unit' => 'Tenaga Kependidikan'
            ],

        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
