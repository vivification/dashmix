<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('f_account_name');
            $table->integer('f_account_type')->nullable();
            $table->integer('f_account_contact_primary')->nullable();
            $table->string('f_account_phone_primary');
            $table->string('f_account_email_primary');
            $table->string('f_account_fax')->nullable();
            $table->string('f_account_website')->nullable();
            $table->integer('f_account_industry')->nullable();
            $table->string('f_account_referred_by')->nullable();
            $table->integer('f_account_price_level')->nullable();
            $table->integer('f_account_currency')->nullable();
            $table->integer('f_account_terms')->nullable();
            $table->integer('f_account_area_manager')->nullable();
            $table->string('f_account_address_street');
            $table->string('f_account_address_street_locale');
            $table->string('f_account_address_mailing')->nullable();
            $table->string('f_account_address_mailing_locale')->nullable();
            $table->integer('f_account_status')->nullable();
            $table->string('f_account_parent')->nullable();
            $table->integer('f_account_reference')->nullable();
            $table->dateTime('f_account_created')->nullable();
            $table->integer('f_account_created_by')->nullable();
            $table->dateTime('f_account_modified')->nullable();
            $table->integer('f_account_modified_by')->nullable();
            $table->string('f_account_vendor')->nullable();
            $table->string('f_account_abn')->nullable();
            $table->string('f_account_description')->nullable();
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
        Schema::dropIfExists('f_accounts');
    }
}
