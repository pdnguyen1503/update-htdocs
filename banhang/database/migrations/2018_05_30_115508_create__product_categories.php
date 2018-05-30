<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name',50);
            $table->integer('ParentId')->unsigned()->default(0);
            $table->text('Description')->nullable();
            $table->text('Keyword',255)->nullable();
            $table->boolean('Active'->default(true);
            $table->integer('User_id');
            $table->tinyinteger('Sort')->default(0);
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
        Schema::dropIfExists('ProductCategories');
    }
}
