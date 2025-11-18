<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $fillable = [
        'cart_id',
        'product_id',
        'variant_id',
        'quantity',
        'price',
        'subtotal',
    ];

    protected $casts = [
        'cart_id'    => 'integer',
        'product_id' => 'integer',
        'variant_id' => 'integer',
        'quantity'   => 'integer',
        'price'      => 'decimal:2',
        'subtotal'   => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
