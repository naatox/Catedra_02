<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Renato Morales Constancio',
            'rut' => '20.793.882-3',
            'asig' => 'Intro. Desarrollo Web/Móvil'
        ]);
        $this->call([
            ProductsSeeder::class
         ]);
    }
}
