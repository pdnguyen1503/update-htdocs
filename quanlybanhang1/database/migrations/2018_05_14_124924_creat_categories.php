<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('tag');
            $table->string('description');
            $table->string('icon');
            $table->string('slug');
            $table->boolean('active');
            echo "dax tao bang";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Categories');
    }
}
