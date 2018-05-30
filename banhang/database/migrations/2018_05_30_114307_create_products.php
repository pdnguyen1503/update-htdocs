<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('CategoryId');
            $table->string('Name',50);
            $table->string('Code',50);
            $table->integer('Price');
            $table->integer('PricePromotion');
            $table->integer('FreeStock');
            $table->boolean('Featured');
            $table->String('Condition');
            $table->String('Brand');
            $table->String('ImageFeature');
            $table->String('Gallery');
            $table->Text('Detail');
            $table->integer('Rating');
            $table->string('Tag');
            $table->text('Description');
            $table->text('Keyword');
            $table->boolean('Active');
            $table->integer('User_id');
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
        Schema::dropIfExists('products');
    }
}
