<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountStatusSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {

        $roles = [['f_account_status_name' => 'Active'], ['f_account_status_name' => 'Inactive']];

        DB::table('f_account_status')->insert($roles);

    }
}
