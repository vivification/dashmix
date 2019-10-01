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
                    'status' => 'Active'],

                ['f_price_level_name' => 'Ceva Logistics',
                    'status' => 'Active'],

                ['f_price_level_name' => 'Linfox',
                    'status' => 'Active'],

                ['f_price_level_name' => 'SolidCAT Testing',
                    'status' => 'Active'],

                ['f_price_level_name' => 'Everyone Else',
                    'status' => 'Active'],

                ['f_price_level_name' => 'Coles & City FM',
                    'status' => 'Active'],

                ['f_price_level_name' => 'Bunnings',
                    'status' => 'Active'],

                ['f_price_level_name' => 'AusPost',
                    'status' => 'Active']
            ];

        DB::table('f_price_level')->insert($pricelevels);

    }
}
