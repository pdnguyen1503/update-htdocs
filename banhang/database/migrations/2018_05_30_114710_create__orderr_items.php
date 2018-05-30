<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderrItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrderItems', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('OrderId');
            $table->integer('ProductId');
            $table->integer('Quantity');
            $table->integer('Price');
            $table->String('Notes');
            $table->String('Status');
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
        Schema::dropIfExists('OrderItems');
    }
}
