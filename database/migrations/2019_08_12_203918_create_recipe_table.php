<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->integer('order_id')->unsigned()->index()->nullable();
            $table->string('ingredient');
            $table->string('title');
            $table->string('portion');
            $table->string('how_to_1');
            $table->string('how_to_2')->nullable();
            $table->string('how_to_3')->nullable();
            $table->string('how_to_4')->nullable();
            $table->string('how_to_5')->nullable();
            $table->string('how_to_6')->nullable();
            $table->string('how_to_7')->nullable();
            $table->string('how_to_8')->nullable();
            $table->string('how_to_9')->nullable();
            $table->string('how_to_10')->nullable();
            $table->string('how_to_11')->nullable();
            $table->string('how_to_12')->nullable();
            $table->string('one_point')->nullable();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('order_id')->references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
