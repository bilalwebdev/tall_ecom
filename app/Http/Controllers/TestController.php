<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function test(): string
    {
        $products = Product::where('active', 1);

        $products->whereHas('variant', function ($query) {
            return  $query->whereBetween('sale_price', [20000, 30000]);
        });




        dd($products->get());
    }
}
