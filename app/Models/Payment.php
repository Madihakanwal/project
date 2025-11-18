<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'order_id',
        'payment_method',
        'transaction_id',
        'amount',
        'status', // 'success', 'failed', 'pending'
    ];

    protected $casts = [
        'order_id'        => 'integer',
        'payment_method'  => 'string',
        'transaction_id'  => 'string',

        // Monetary value
        'amount'          => 'decimal:2',

        // Enum-like status
        'status'          => 'string',

        'created_at'      => 'datetime',
        'updated_at'      => 'datetime',
    ];
}

