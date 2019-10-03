<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddExtraFieldsToFPriceLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('f_price_level', function (Blueprint $table) {
            $table->string('f_description')->after('f_price_level_name');
            $table->decimal('f_rate')->after('f_description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('f_price_level', function (Blueprint $table) {
            $table->string('f_description');
            $table->decimal('f_rate');
        });
    }
}
