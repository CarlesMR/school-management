<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Carles',
            'email' => 'carles@dev.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Admin Technodac',
            'email' => 'admin@technodac.com',
            'password' => Hash::make('password'),
        ]);
    }
}
