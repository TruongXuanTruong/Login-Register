<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillabel = [
        'title',
        'price',
        'product_code',
        'description',
        'image',
        'type_products',
    ];
}
