<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameFAccountIndustryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('f_account_industry', function (Blueprint $table) {
            $table->renameColumn('f_account_type_name', 'f_industry_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('f_account_industry', function (Blueprint $table) {
            $table->renameColumn('f_industry_name', 'f_account_type_name');
        });
    }
}
