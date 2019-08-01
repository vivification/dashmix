<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAdditionalFieldsToFAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('f_accounts', function (Blueprint $table) {
            $table->string('f_account_city')->after('f_account_address_street')->nullable();
            $table->string('f_account_state')->after('f_account_city')->nullable();
            $table->string('f_account_postcode')->after('f_account_state')->nullable();
            $table->string('f_account_country')->after('f_account_postcode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('f_accounts', function (Blueprint $table) {
            $table->dropColumn('f_account_city');
            $table->dropColumn('f_account_state');
            $table->dropColumn('f_account_postcode');
            $table->dropColumn('f_account_country');
        });
    }
}
