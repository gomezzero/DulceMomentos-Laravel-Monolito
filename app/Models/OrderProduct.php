<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    use HasFactory;

    protected $table = 'order_product'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'cantidad',
        'net_value',
        'order_id',
        'products_id',
    ];

    /**
     * Relación con el modelo Order
     */
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    /**
     * Relación con el modelo Product
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id');
    }
}
