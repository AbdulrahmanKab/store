<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDelivery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deleviry',function (Blueprint $table){
           $table->increments('id');
           $table->string('name_sender');
           $table->string('name_vechile')->nullable();
           $table->unsignedInteger('order_id');
            $table->integer('confirm')->default(0);
            $table->timestamps();
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
        //
    }
}
