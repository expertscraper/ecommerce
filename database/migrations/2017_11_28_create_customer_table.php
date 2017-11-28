<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_code');
            $table->string('customer_name');
            $table->string('biling_name');
            $table->string('postal_code');
            $table->string('street_address');
            $table->string('state');
            $table->string('city');
            $table->string('country');
            $table->string('phone_number');
            $table->string('contact_name');
            $table->string('fax_number');
            $table->date('closing_date');
            $table->string('biling_name');
            $table->string('payment');
            $table->string('account');
            $table->int('price');
            $table->integer('approved');
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
        Schema::dropIfExists('customers');
    }
}
