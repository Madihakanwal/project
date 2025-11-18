<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'status',
        'image',
    ];

    protected $casts = [
        'category_id'  => 'integer',
        'name'         => 'string',
        'slug'         => 'string',
        'description'  => 'string',
        'status'       => 'boolean',   // active/inactive
        'image'        => 'string',
        'created_at'   => 'datetime',
        'updated_at'   => 'datetime',
    ];
}
