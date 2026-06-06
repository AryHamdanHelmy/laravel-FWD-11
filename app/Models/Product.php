<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'category_id',
        'is_active',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    protected $cast = [
        'price'=> 'integer',
        'stock'=> 'integer',
        'is_active'=> 'boolean',
        'metadata'=> 'array',
        'published_at'=> 'datetime',
    ];
}
