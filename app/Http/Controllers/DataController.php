<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderProduct;

class DataController extends Controller
{
    public function index()
    {
        // Recuperar los datos de las tablas
        $clients = Client::all();
        $products = Product::all();
        $orders = Order::with('client')->get(); // Asegúrate de tener la relación `client` en el modelo Order
        $orderProducts = OrderProduct::with(['order', 'product'])->get();

        // Pasar los datos a la vista
        return view('data.index', compact('clients', 'products', 'orders', 'orderProducts'));
    }
}
