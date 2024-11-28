<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; // Importa el trait
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'delivery_date',
        'description',
        'status',
        'clients_id'];

    public function client()
    {
        return $this->belongsTo(Client::class, 'clients_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product')
            ->withPivot('cantidad', 'net_value')
            ->withTimestamps();
    }
}
