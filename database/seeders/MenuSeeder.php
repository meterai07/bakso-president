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
            'price' => 'Rp. 12.000',
        ]);

        Menu::create([
            'name' => 'Bakso Sapi',
            'price' => 'Rp. 10.000',
        ]);
    }
}
