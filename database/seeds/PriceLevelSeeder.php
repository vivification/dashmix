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
                ['f_price_level_name' => 'Coles & DTZ'],
                ['f_price_level_name' => 'Ceva Logistics'],
                ['f_price_level_name' => 'Linfox'],
                ['f_price_level_name' => 'SolidCAT Testing'],
                ['f_price_level_name' => 'Everyone Else'],
                ['f_price_level_name' => 'Coles & City FM'],
                ['f_price_level_name' => 'Bunnings'],
                ['f_price_level_name' => 'AusPost']
            ];

        DB::table('f_price_level')->insert($pricelevels);

    }
}
