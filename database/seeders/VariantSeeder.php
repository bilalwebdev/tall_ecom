<?php

namespace Database\Seeders;

use App\Models\Variant;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Support\Arr;
use Facades\App\Helpers\SKU;
use App\Models\VariantOption;
use App\Models\VariantSize;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VariantSeeder extends Seeder
{
    protected $sizes = ['small', 'medium', 'large', 'xl', 'lg', 'md', 'sm', 'xxl'];
    protected $colors = ['red', 'white', 'green', 'black', 'yellow', 'blue', 'brown', 'magenta', 'cyan', 'purple'];

    protected function getCombinations(): array
    {
        $combinations = [];
        foreach ($this->sizes as $size) {
            foreach ($this->colors as $color) {
                $combinations[] = [$color, $size];
            }
        }
        return $combinations;
    }

    protected function getOne($name, $key)
    {
        $data =  $this->{$name};
        return $data[$key];
    }



    public function run(): void
    {

        Product::all()->each(function ($product) {

            $price = rand(50, 500);

            Variant::create([
                'sku' => SKU::make($product->title),
                'product_id' => $product->id,
                'sale_price' => $price + rand(200, 300),
                'offer_price' => $price + rand(80, 150),
                'shipping_weight' => rand(1, 10),
                'stock' => mt_rand(10, 100),
                'size_id' => rand(1, 4),
                'color_id' => rand(1, 4),
                'is_default' => 1
            ]);
            Variant::create([
                'sku' => SKU::make($product->title),
                'product_id' => $product->id,
                'sale_price' => $price + rand(200, 300),
                'offer_price' => $price + rand(80, 150),
                'shipping_weight' => rand(1, 10),
                'stock' => mt_rand(10, 100),
                'size_id' => rand(1, 4),
                'color_id' => rand(1, 4)
            ]);
        });
    }
}
