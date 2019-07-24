<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f_contact', function (Blueprint $table) {
            $table->increments('f_contact_id');
            $table->string('f_contact_first_name');
            $table->string('f_contact_last_name');
            $table->string('f_contact_phone_main')->nullable();
            $table->string('f_contact_phone_mobile')->nullable();
            $table->string('f_contact_email')->nullable();
            $table->string('f_contact_fax')->nullable();
            $table->string('f_contact_address_street')->nullable();
            $table->string('f_contact_address_street_locale')->nullable();
            $table->string('f_contact_address_street_suburb')->nullable();
            $table->string('f_contact_address_street_state')->nullable();
            $table->string('f_contact_address_street_postcode')->nullable();
            $table->string('f_contact_address_mailing')->nullable();
            $table->string('f_contact_address_mailing_locale')->nullable();
            $table->string('f_contact_address_mailing_suburb')->nullable();
            $table->string('f_contact_address_mailing_state')->nullable();
            $table->string('f_contact_address_mailing_postcode')->nullable();
            $table->string('f_contact_notes')->nullable();
            $table->string('f_contact_parent')->nullable();
            $table->string('f_contact_reference')->nullable();
            $table->dateTime('f_contact_created')->nullable();
            $table->string('f_contact_created_by')->nullable();
            $table->dateTime('f_contact_modified')->nullable();
            $table->string('f_contact_modified_by')->nullable();
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
        Schema::dropIfExists('f_contact');
    }
}
