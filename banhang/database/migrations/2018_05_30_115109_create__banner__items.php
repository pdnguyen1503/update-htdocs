<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BannerItems', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name',50);
            $table->integer('Banner_id');
            $table->string('Images');
            $table->string('Link');
            $table->string('Text1');
            $table->string('Text2');
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
        Schema::dropIfExists('BannerItems');
    }
}
