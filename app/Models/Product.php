<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'sku',
        'unit',
        'current_stock',
        'minimum_stock',
        'cost_price',
        'notes',
    ];
}
