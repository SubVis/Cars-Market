<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCars2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars2', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('car_id')->unsigned();
            //  $table->foreign('car_id')->references('id')->on('cars')->onUpdate('cascade')->onDelete('cascade');
             $table->string('image');
             $table->string('comfort');
             $table->string('windows');
             $table->string('sounds');
             $table->string('safe');
             $table->string('other_future');
          
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
        Schema::dropIfExists('cars2');
    }
}
