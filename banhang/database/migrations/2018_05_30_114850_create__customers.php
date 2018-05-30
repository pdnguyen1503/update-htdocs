<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Code',50);
            $table->string('FirstName',50);
            $table->string('LastName',50);
            $table->string('Email',50);
            $table->string('Password',50);
            $table->integer('Phone');
            $table->string('Address');
            $table->date('DateOfBirth');
            $table->string('DeliveryContact');
            $table->string('DeliveryPhone');
            $table->string('DeliveryAddress');
            $table->string('BillingContact');
            $table->string('BillingPhone');
            $table->string('BillingAddress');
            $table->boolean('Active');
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
        Schema::dropIfExists('Customers');
    }
}
