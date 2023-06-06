<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'adminbakso@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            MenuSeeder::class,
            CategorySeeder::class,
            TransactionSeeder::class,
            OrderMenuSeeder::class,
        ]);
    }
}
