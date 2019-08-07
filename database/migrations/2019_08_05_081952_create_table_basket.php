<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBasket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket',function (Blueprint $table){
           $table->increments('id');
           $table->unsignedInteger('product_id');
           $table->unsignedInteger('user_id');
           $table->integer('amount')->nullable();
           $table->integer('confirmed')->nullable();
            $table->timestamps();
           $table->foreign('product_id')->references('id')->on('product');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
