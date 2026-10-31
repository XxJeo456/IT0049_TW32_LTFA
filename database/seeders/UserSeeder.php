<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['username' => 'admin',     'full_name' => 'Admin Dela Cruz'],
            ['username' => 'rlopez',    'full_name' => 'Rhea Lopez'],
            ['username' => 'jbautista', 'full_name' => 'Jun Bautista'],
            ['username' => 'cmendoza',  'full_name' => 'Carla Mendoza'],
            ['username' => 'kvillan',   'full_name' => 'Ken Villanueva'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}