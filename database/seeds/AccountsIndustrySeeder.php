<?php

use Illuminate\Database\Seeder;

class AccountsIndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $industries =
            [
                ['f_industry_name' => 'Agriculture, Forestry, Fishing'],
                ['f_industry_name' => 'Archictects/Building Design'],
                ['f_industry_name' => 'Associations / Charities'],
                ['f_industry_name' => 'Building Supplies'],
                ['f_industry_name' => 'Communications/IT & Software'],
                ['f_industry_name' => 'Construction/Contractors'],
                ['f_industry_name' => 'Consulting'],
                ['f_industry_name' => 'Education'],
                ['f_industry_name' => 'Equipment Rental and Leasing'],
                ['f_industry_name' => 'Finance/ Insurance/Real Estate/Legal'],
                ['f_industry_name' => 'Food and Tobacco Processing'],
                ['f_industry_name' => 'Manufacturing / Engineering'],
                ['f_industry_name' => 'Media/ Printing and Publishing'],
                ['f_industry_name' => 'Medical'],
                ['f_industry_name' => 'Mining / Resources'],
                ['f_industry_name' => 'Retail Trade'],
                ['f_industry_name' => 'Services'],
                ['f_industry_name' => 'Sport, Film & Entertainment'],
                ['f_industry_name' => 'Tourism / Hospitality / Accom'],
                ['f_industry_name' => 'Transport'],
                ['f_industry_name' => 'Vehicle Retail'],
                ['f_industry_name' => 'Wholesale Distribution']
            ];

        DB::table('f_account_industry')->insert($industries);
    }
}
