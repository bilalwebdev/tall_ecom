<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariantSize extends Model
{
    use HasFactory;

    protected $fillable = ['size_id', 'variant_id', 'product_id'];
}
