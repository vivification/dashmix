<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(AccountsTableSeeder::class);
        $this->call(AccountsTypeSeeder::class);
        $this->call(AccountStatusSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(AccountsIndustrySeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(PriceLevelSeeder::class);

    }
}
