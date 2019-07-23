<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountsTypeSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {

        $roles = [['f_account_type_name' => 'Client'], ['f_account_type_name' => 'Supplier']];

        DB::table('f_account_type')->insert($roles);

    }
}