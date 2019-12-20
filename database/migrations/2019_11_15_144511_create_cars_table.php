<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
             $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->text('title');
            $table->integer('brand_id')->unsigned();
             $table->foreign('brand_id')->references('id')->on('brand')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('model_id')->unsigned();
             $table->foreign('model_id')->references('id')->on('model')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('city_id')->unsigned();
             $table->foreign('city_id')->references('id')->on('city')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('cc');
            $table->integer('kilometers');
            $table->string('driver');
            $table->string('fuel');
            $table->string('color');
            $table->integer('price');
            $table->text('description');
            $table->string('slug')->unique();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
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
        Schema::dropIfExists('cars');
    }
}
