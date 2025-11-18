<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'product_id',
        'rating',
        'comment',
        'status', // approved/pending/hidden
    ];

    protected $casts = [
        'user_id'     => 'integer',
        'product_id'  => 'integer',
        'rating'      => 'integer', // e.g., 1 to 5 stars
        'comment'     => 'string',
        'status'      => 'boolean', // true = approved, false = pending/hidden
        'created_at'  => 'datetime',
        'updated_at'  => 'datetime',
    ];
}
