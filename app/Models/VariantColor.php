<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantColor extends Model
{
    use HasFactory;

    protected $fillable = ['color_id', 'variant_id', 'product_id'];
}
