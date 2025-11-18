<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'order_number',
        'total_amount',
        'discount',
        'shipping_cost',
        'payment_status',
        'order_status',
        'shipping_address_id',
        'payment_method',
    ];

    protected $casts = [
        'user_id'             => 'integer',
        'order_number'        => 'integer',
        'total_amount'        => 'float',
        'discount'            => 'float',
        'shipping_cost'       => 'float',
        'shipping_address_id' => 'integer',
        'payment_status'      => 'string',
        'order_status'        => 'string',
        'payment_method'      => 'string',
        'created_at'          => 'datetime',
        'updated_at'          => 'datetime',
    ];
}
