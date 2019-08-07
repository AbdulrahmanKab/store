<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uses',function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('product_id');
            $table->string('value');
            $table->timestamps();
            $table->integer('isdeleted')->default(0);
            $table->foreign('product_id')->references('id')->on('product');
        } );
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
