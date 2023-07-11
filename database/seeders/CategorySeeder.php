<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'Woman' => [
                "Bag",
                "Shoes",
                "Shirts",
                "Watches"
            ],
            'Man' => [
                "Bag",
                "Shoes",
                "Shirts",
                "Watches"
            ],
            'Kids' => [
                "Shoes",
                "Shirts",
            ],

        ];

        foreach ($data as $key => $value) {
            $category = Category::create(['name' => $key]);
            foreach ($value as $cat) {
                Category::create(['name' => $key . ' ' . $cat, 'parent_id' => $category->id]);
            }
        }
    }
}
