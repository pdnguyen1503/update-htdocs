<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('CustomerID');
            $table->integer('SubTotal');
            $table->boolean('Ship');
            $table->integer('ShipCost');
            $table->string('Gift');
            $table->string('GiftMassage');
            $table->integer('Tax');
            $table->integer('Total');
            $table->String('DeliveryContact');
            $table->String('DeliveryPhone');
            $table->String('DeliveryAddress');
            $table->String('BillingContact');
            $table->String('BillingPhone');
            $table->String('BillingAddress');
            $table->String('Notes');
            $table->String('Status');
            $table->boolean('Paid');
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
}
