<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Castañas de Caju',
            'price' => 5000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'imageName' => 'https://random.imagecdn.app/500/150'
        ]);
        Product::create([
            'name' => 'Stevia',
            'price' => 5000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'imageName' => 'https://random.imagecdn.app/500/150'
        ]);
        Product::create([
            'name' => 'Mix Ensalada',
            'price' => 5000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'imageName' => 'https://random.imagecdn.app/500/150'
        ]);
        Product::create([
            'name' => 'Papas',
            'price' => 5000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'imageName' => 'https://random.imagecdn.app/500/150'
        ]);
        Product::create([
            'name' => 'Ñoquis de espinaca',
            'price' => 5000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'imageName' => 'https://random.imagecdn.app/500/150'
        ]);
        Product::create([
            'name' => 'Huevos',
            'price' => 5000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'imageName' => 'https://random.imagecdn.app/500/150'
        ]);
        Product::create([
            'name' => 'Soda Caustica',
            'price' => 5000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'imageName' => 'https://random.imagecdn.app/500/150'
        ]);
        Product::create([
            'name' => 'Salmón Ahumado',
            'price' => 5000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'imageName' => 'https://random.imagecdn.app/500/150'
        ]);
        Product::create([
            'name' => 'Surtido de Mariscos',
            'price' => 5000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'imageName' => 'https://random.imagecdn.app/500/150'
        ]);
        Product::create([
            'name' => 'Vinagre de Manzana',
            'price' => 5000,
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'imageName' => 'https://random.imagecdn.app/500/150'
        ]);
    }
}
