<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Importa la clase DB



class OrderProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('order_product')->insert([
            ['cantidad' => 2, 'net_value' => 21.00, 'order_id' => 1, 'products_id' => 1],
            ['cantidad' => 1, 'net_value' => 15.75, 'order_id' => 1, 'products_id' => 2],
            ['cantidad' => 3, 'net_value' => 60.00, 'order_id' => 2, 'products_id' => 3],
            ['cantidad' => 1, 'net_value' => 10.50, 'order_id' => 3, 'products_id' => 1],
        ]);
    }
}
