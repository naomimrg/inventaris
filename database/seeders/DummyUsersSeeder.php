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
                'password' => bcrypt('12345678')
            ],

            [
                'name' => 'Naomi Manurung',
                'username' => 'staf1',
                'role' => 'staf_aset',
                'password' => bcrypt('87654321')
            ],

        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
