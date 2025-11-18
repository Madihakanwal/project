<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
    ];

    protected $casts = [
        'user_id'    => 'integer',
        'product_id' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
