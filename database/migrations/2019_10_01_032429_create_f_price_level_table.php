<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFPriceLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_price_level', function (Blueprint $table) {
            $table->bigIncrements('f_price_level_id');
            $table->string('f_price_level_name');
            $table->string('f_price_level_parent')->nullable(); //this means that if you send empty value this field will become MySQL NULL
            $table->integer('f_price_level_reference')->nullable();
            $table->integer('f_price_level_created_by')->nullable();
            $table->integer('f_price_level_modified_by')->nullable();
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
        Schema::dropIfExists('f_price_level');
    }
}
