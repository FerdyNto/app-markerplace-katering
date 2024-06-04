<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'nama' => 'Misop Enak Sekali',
            'alamat' => 'jl. Sendirian',
            'kontak' => '081299008877',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, incidunt quasi! A repellat nostrum corporis minima vel iure ipsum eaque totam illum cum, perferendis ducimus harum sapiente, voluptatem sed enim.',
            'user_id' => 1
        ]);
        Profile::create([
            'nama' => 'Ceker Mantap',
            'alamat' => 'jl. Kapan Saja',
            'kontak' => '081299008854',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, incidunt quasi! A repellat nostrum corporis minima vel iure ipsum eaque totam illum cum, perferendis ducimus harum sapiente, voluptatem sed enim.',
            'user_id' => 2
        ]);
    }
}
