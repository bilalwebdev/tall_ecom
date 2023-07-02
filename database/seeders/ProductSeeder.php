<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Variant;
use App\Models\VariantOption;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */




    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        Variant::truncate();
        Product::truncate();

        Schema::enableForeignKeyConstraints();

        Product::factory()
            ->count(20)
            ->create();
    }
}
