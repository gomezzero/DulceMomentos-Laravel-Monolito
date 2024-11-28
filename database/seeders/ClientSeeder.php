<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    public function run()
    {
        Client::create(['name' => 'Juan Pérez', 'phone' => '123456789', 'address' => 'Calle Principal 123']);
        Client::create(['name' => 'Ana López', 'phone' => '987654321', 'address' => 'Avenida Central 456']);
        Client::create(['name' => 'Carlos García', 'phone' => '456123789', 'address' => 'Calle Secundaria 789']);
    }
}
