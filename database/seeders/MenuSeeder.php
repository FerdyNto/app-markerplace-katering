<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'nama_menu' => 'Misop Ayam',
            'deskripsi' => 'Misop dengan suwiran ayam',
            'foto' => 'mie ayam bakso super.jpeg',
            'harga' => 10000,
            'user_id' => 1
        ]);
    }
}
