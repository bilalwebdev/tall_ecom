<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CurrencySeeder extends Seeder
{

    public function run(): void
    {
        Currency::truncate();
        Currency::create([
            "code" => 'HUF',
            "sign" => 'Ft',
            "name" => 'Hungarian Forint',
            "exchange_rate" => 1,
            "default" => true,
        ]);

        $currencies = [
            [
                "code" => 'USD',
                "sign" => '$',
                "name" => 'US Dollar',
            ],
            [
                "code" => 'EUR',
                "sign" => '€',
                "name" => 'Euro',
            ],
            [
                "code" => 'GBP',
                "sign" => '£',
                "name" => 'British Pound',
            ],
            [
                "code" => 'BDT',
                "sign" => '৳',
                "name" => 'Bangladeshi Taka',
            ],
        ];
    }
}
