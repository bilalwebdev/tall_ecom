<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Color::truncate();

        Color::create([
            'name' => '#C04ABC'
        ]);

        Color::create([
            'name' => ' #7BDFF2'

        ]);

        Color::create([
            'name' => ' #aeb2b5'

        ]);
        Color::create([
            'name' => ' #ea6e6f'

        ]);
    }
}
