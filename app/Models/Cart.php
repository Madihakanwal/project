<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'session_id',
        'total',
    ];

    protected $casts = [
        'user_id'   => 'integer',
        'session_id'=> 'string',
        'total'     => 'float',
        'created_at'=> 'datetime',
        'updated_at'=> 'datetime',
    ];
}
