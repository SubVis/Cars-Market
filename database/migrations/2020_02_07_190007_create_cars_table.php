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
             $table->foreign('brand_id')->references('id')->on('brands')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('model_id')->unsigned();
            $table->foreign('model_id')->references('id')->on('cars_models')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities')->onUpdate('cascade')->onDelete('cascade');
           
            $table->integer('driver_id')->unsigned();
            $table->foreign('driver_id')->references('id')->on('drivers')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('fuel_id')->unsigned();
            $table->foreign('fuel_id')->references('id')->on('fuels')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('color_id')->unsigned();
             $table->foreign('color_id')->references('id')->on('colors')->onUpdate('cascade')->onDelete('cascade');
              $table->integer('modelyear_id')->unsigned();
             $table->foreign('modelyear_id')->references('id')->on('ModelYears')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('price');
            $table->integer('cc');
            $table->integer('kilometers');
            $table->text('description');
            $table->string('image');
             $table->string('comfort')->nullable();
             $table->string('windows')->nullable();
             $table->string('sounds')->nullable();
             $table->string('safe')->nullable();
             $table->string('other_future')->nullable();
            $table->string('slug')->unique()->nullable();
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
