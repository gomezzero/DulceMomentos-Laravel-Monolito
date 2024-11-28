<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create(['name' => 'Producto A', 'size' => 'Pequeño', 'price' => '10.50']);
        Product::create(['name' => 'Producto B', 'size' => 'Mediano', 'price' => '15.75']);
        Product::create(['name' => 'Producto C', 'size' => 'Grande', 'price' => '20.00']);
    }
}
