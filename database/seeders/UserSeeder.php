<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => "misop",
            'password' => Hash::make("rahasia123"),
            'role' => "merchant"
        ]);
        User::create([
            'username' => "ferdy",
            'password' => Hash::make("rahasia123"),
            'role' => "customer"
        ]);
    }
}
