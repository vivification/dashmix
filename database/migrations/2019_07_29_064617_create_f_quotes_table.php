<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFQuotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('quote_number');
            $table->string('job_number')->nullable();
            $table->date('quote_date');
            $table->integer('customer_id')->unsigned(); //reference to customer_id (foreign key)
            $table->foreign('customer_id')->references('id')->on('f_customers');
            $table->decimal('tax_percent')->default(0);
            $table->string('status');
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
        Schema::dropIfExists('f_quotes');
    }
}
