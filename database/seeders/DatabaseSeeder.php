<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => 'superadmin'
        ]);

        $this->call([

            LanguageSeeder::class,
            CategorySeeder::class,
            CurrencySeeder::class,
            ColorSeeder::class,
            SizeSeeder::class,
            ProductSeeder::class,
            VariantSeeder::class,
            CouponSeeder::class
        ]);
    }
}
