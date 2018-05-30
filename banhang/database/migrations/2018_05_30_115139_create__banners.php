<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Banners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name',50);
            $table->string('Position');
            $table->text('Description');
            $table->boolean('Active');
            $table->integer('UserId');
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
        Schema::dropIfExists('Banners');
    }
}
