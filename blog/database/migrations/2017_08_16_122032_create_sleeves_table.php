<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSleevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sleeves', function (Blueprint $table) {
            $table->increments('id');

            //$table->integer('front_id')->unsigned()->index()->references('id')->on('fronts')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('front_id')->references('front_id')->on('front');//->onDelete('cascade;');
            //is this how 

            $table->integer('front_id')->unsigned();
            $table->foreign('front_id')->references('id')->on('fronts')->onDelete('cascade')->onUpdate('cascade');
            $table->string('pattern');
            $table->string('desc');
            $table->integer('rate');
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
        Schema::dropIfExists('sleeves');
    }
}