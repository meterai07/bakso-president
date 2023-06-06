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
            'price' => '12000',
            'category_id' => '1',
        ]);

        Menu::create([
            'name' => 'Bakso Sapi',
            'description' => 'Bakso Sapi Enak',
            'price' => '10000',
            'category_id' => '1',
        ]);

        Menu::create([
            'name' => 'Bakso Ayam',
            'description' => 'Bakso Ayam Enak',
            'price' => '8000',
            'category_id' => '1',
        ]);

        Menu::create([
            'name' => 'Bakso Ikan',
            'description' => 'Bakso Ikan Enak',
            'price' => '10000',
            'category_id' => '1',
        ]);

        Menu::create([
            'name' => 'Bakso Tahu',
            'description' => 'Bakso Tahu Enak',
            'price' => '8000',
            'category_id' => '1',
        ]);

        Menu::create([
            'name' => 'Bakso Jamur',
            'description' => 'Bakso Jamur Enak',
            'price' => '10000',
            'category_id' => '1',
        ]);
    }
}
