<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Size::truncate();

        Size::create([
            'name' => 'XXL'
        ]);

        Size::create([
            'name' => 'XL'
        ]);
        Size::create([
            'name' => 'M'
        ]);
        Size::create([
            'name' => 'SM'
        ]);
    }
}
