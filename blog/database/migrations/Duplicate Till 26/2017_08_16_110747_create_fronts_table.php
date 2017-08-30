<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrontsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fronts', function (Blueprint $table) {
           $table->increments('id');
            // $table->integer('product_id')->unsigned();
            $table->integer('product_id')->unsigned()->unique()->index()->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade;'); 
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
        Schema::dropIfExists('fronts');
    }
}
