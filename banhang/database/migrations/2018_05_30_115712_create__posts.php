<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('CategoryId');
            $table->string('Title',300);
            $table->string('Intro');
            $table->text('Content');
            $table->string('Images');
            $table->integer('CountComment');
            $table->string('Tag');
            $table->string('Description');
            // $table->string('icon');
            $table->string('Slug');
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
        Schema::dropIfExists('Posts');
    }
}
