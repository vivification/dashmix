<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFCurrencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_currency', function (Blueprint $table) {
            $table->bigIncrements('f_currency_id');
            $table->string('f_currency_name');
            $table->string('f_currency_abbreviation');
            $table->string('f_currency_symbol');
            $table->decimal('f_currency_rate');
            $table->decimal('f_currency_comparison_rate');
            $table->string('f_currency_parent')->nullable();
            $table->integer('f_currency_reference')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('f_currency');
    }
}
