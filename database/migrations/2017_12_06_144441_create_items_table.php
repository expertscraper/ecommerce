<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_id');
            $table->string('item_name');
            $table->string('customer_id');
            $table->integer('quantity');
            $table->double('price');
            $table->string('unit');
            $table->string('summary');
            $table->string('message');
            $table->date('due_date');
            $table->double('grand_total');
            $table->double('total');
            $table->double('discount');
            $table->double('tax');
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
        Schema::dropIfExists('items');
    }
}
