<?php

use Illuminate\Database\Seeder;

class PriceLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pricelevels =
            [
                ['f_price_level_name' => 'Coles & DTZ',
                    'f_status' => 'Active',
                    'f_description' => 'Coles & DTZ Price level',
                    'f_rate' => 1.00],

                ['f_price_level_name' => 'Ceva Logistics',
                    'f_status' => 'Active',
                    'f_description' => 'This is for Ceva Logistics',
                    'f_rate' => 1.00],

                ['f_price_level_name' => 'Linfox',
                    'f_status' => 'Active',
                    'f_description' => 'This is for Linfox',
                    'f_rate' => 1.00],

                ['f_price_level_name' => 'Everyone Else',
                    'f_status' => 'Active',
                    'f_description' => 'All other customers',
                    'f_rate' => 1.00],

                ['f_price_level_name' => 'Coles & City FM',
                    'f_status' => 'Active',
                    'f_description' => 'This is for Coles & CityFM',
                    'f_rate' => 1.00],

                ['f_price_level_name' => 'Bunnings',
                    'f_status' => 'Active',
                    'f_description' => 'Bunnings Price Level group',
                    'f_rate' => 1.00],

                ['f_price_level_name' => 'AusPost',
                    'f_status' => 'Active',
                    'f_description' => 'Australia Post Group',
                    'f_rate' => 1.00]
            ];

        DB::table('f_price_level')->insert($pricelevels);

    }
}
