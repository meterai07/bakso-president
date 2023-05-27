<?php

namespace Database\Seeders;

use App\Models\Menu;
use Database\Factories\MenuFactory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::create([
            'name' => 'Bakso Urat',
            'description' => 'Bakso Urat Enak',
            'image' => '',
            'price' => 'Rp. 12.000',
        ]);

        Menu::create([
            'name' => 'Bakso Sapi',
            'description' => 'Bakso Sapi Enak',
            'image' => '',
            'price' => 'Rp. 10.000',
        ]);

        Menu::create([
            'name' => 'Bakso Ayam',
            'description' => 'Bakso Ayam Enak',
            'image' => '',
            'price' => 'Rp. 8.000',
        ]);
    }
}
