<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container my-4">
    <h1 class="mb-4">Datos Listados</h1>

    <h2>Clientes</h2>
    <ul class="list-group mb-4">
        @foreach ($clients as $client)
            <li class="list-group-item">
                <strong>{{ $client->name }}</strong> - {{ $client->phone }} - {{ $client->address }}
            </li>
        @endforeach
    </ul>

    <h2>Productos</h2>
    <ul class="list-group mb-4">
        @foreach ($products as $product)
            <li class="list-group-item">
                <strong>{{ $product->name }}</strong> - Tamaño: {{ $product->size }} - Precio: {{ $product->price }}
            </li>
        @endforeach
    </ul>

    <h2>Órdenes</h2>
    <ul class="list-group mb-4">
        @foreach ($orders as $order)
            <li class="list-group-item">
                <strong>Orden #{{ $order->id }}</strong> - Cliente: {{ $order->client->name ?? 'N/A' }} - Fecha de Entrega: {{ $order->delivery_date }} - Estado: {{ $order->status }}
            </li>
        @endforeach
    </ul>

    <h2>Productos en Órdenes</h2>
    <ul class="list-group mb-4">
        @foreach ($orderProducts as $orderProduct)
            <li class="list-group-item">
                Orden #{{ $orderProduct->order->id ?? 'N/A' }} - Producto: {{ $orderProduct->product->name ?? 'N/A' }} - Cantidad: {{ $orderProduct->cantidad }} - Valor Neto: {{ $orderProduct->net_value }}
            </li>
        @endforeach
    </ul>
</body>
</html>
