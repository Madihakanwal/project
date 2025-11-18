<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = [
        'product_id',
        'image_path',
        'alt_text',
    ];

    protected $casts = [
        'product_id'  => 'integer',
        'image_path'  => 'string',
        'alt_text'    => 'string',
        'created_at'  => 'datetime',
        'updated_at'  => 'datetime',
    ];
}
