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
            'nama' => 'Burger',
            'kategori' => 'burger',
            'gambar' => 'images/burger.png',
            'harga' => 15000,
        ]);
    }
}
