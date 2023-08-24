<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('oder_code');
            $table->integer('customerid');
            $table->decimal('discount',15,0);
            $table->dateTime('orderdate');
            $table->boolean('status');
            $table->string('payment');
            $table->text('note');
            $table->decimal('totalmoney',15,0);
            $table->decimal('shipper',15,0);
            $table->boolean('shippingstatus');
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
        Schema::dropIfExists('orders');
    }
};
