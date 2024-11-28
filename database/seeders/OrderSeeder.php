<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{

    public function run()
    {
        Order::create([
            'delivery_date' => now()->addDays(5),
            'description' => 'Pedido urgente',
            'status' => 'pendiente',
            'clients_id' => 1, // Asegúrate de que este ID exista en la tabla `clients`.
        ]);

        Order::create([
            'delivery_date' => now()->addDays(10),
            'description' => 'Pedido estándar',
            'status' => 'completado',
            'clients_id' => 2,
        ]);

        Order::create([
            'delivery_date' => now()->addDays(7),
            'description' => 'Pedido en espera',
            'status' => 'cancelado',
            'clients_id' => 3,
        ]);
    }
}
