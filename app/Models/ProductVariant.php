<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    protected $fillable = [
        'product_id',
        'attribute',        // e.g., 'Size', 'Color'
        'value',            // e.g., 'Large', 'Red'
        'price_adjustment', // additional price for variant
        'stock',
    ];

    protected $casts = [
        'product_id'       => 'integer',
        'attribute'        => 'string',
        'value'            => 'string',
        'price_adjustment' => 'decimal:2',
        'stock'            => 'integer',
        'created_at'       => 'datetime',
        'updated_at'       => 'datetime',
    ];
}
