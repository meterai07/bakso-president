<?php

namespace Database\Seeders;

use App\Models\OrderMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderMenu::create([
            'transaction_id' => 1,
            'menu_id' => 1,
            'quantity' => 1,
        ]);

        OrderMenu::create([
            'transaction_id' => 1,
            'menu_id' => 2,
            'quantity' => 10,
        ]);

        OrderMenu::create([
            'transaction_id' => 2,
            'menu_id' => 3,
            'quantity' => 8,
        ]);

        OrderMenu::create([
            'transaction_id' => 2,
            'menu_id' => 4,
            'quantity' => 10,
        ]);

        OrderMenu::create([
            'transaction_id' => 2,
            'menu_id' => 1,
            'quantity' => 6,
        ]);
    }
}
