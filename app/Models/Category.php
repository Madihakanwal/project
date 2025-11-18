<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'image'
    ];

    protected $casts = [
        'name'        => 'string',
        'slug'        => 'string',
        'description' => 'string',
        'status'      => 'boolean',   // active/inactive (0/1)
        'image'       => 'string',

        'created_at'  => 'datetime',
        'updated_at'  => 'datetime',
    ];
}
