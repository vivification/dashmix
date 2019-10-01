<?php

use App\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::create([
            'f_currency_name' => 'Australian Dollar',
            'f_currency_abbreviation' => 'AUD',
            'f_currency_symbol' => '$',
            'f_currency_rate' => '1',
            'f_currency_comparison_rate' => '1'
        ]);

        Currency::create([
            'f_currency_name' => 'U.S. Dollar',
            'f_currency_abbreviation' => 'USD',
            'f_currency_symbol' => '$',
            'f_currency_rate' => '0.78',
            'f_currency_comparison_rate' => '1'
        ]);

        Currency::create([
            'f_currency_name' => 'Pound Sterling',
            'f_currency_abbreviation' => 'GBP',
            'f_currency_symbol' => '£',
            'f_currency_rate' => '0.57',
            'f_currency_comparison_rate' => '1'
        ]);

        Currency::create([
            'f_currency_name' => 'Euro',
            'f_currency_abbreviation' => 'EUR',
            'f_currency_symbol' => '€',
            'f_currency_rate' => '0.65',
            'f_currency_comparison_rate' => '1'
        ]);

        Currency::create([
            'f_currency_name' => 'N.Z. Dollar',
            'f_currency_abbreviation' => 'NZD',
            'f_currency_symbol' => '$',
            'f_currency_rate' => '1.1',
            'f_currency_comparison_rate' => '1'
        ]);

    }
}
