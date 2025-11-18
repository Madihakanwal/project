<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'variant_id',
        'quantity',
        'price',
        'subtotal',
    ];

    protected $casts = [
        'order_id'   => 'integer',
        'product_id' => 'integer',
        'variant_id' => 'integer',

        'quantity'   => 'integer',

        // Monetary values — always use decimal instead of float
        'price'      => 'decimal:2',
        'subtotal'   => 'decimal:2',

        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
