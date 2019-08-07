<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableLink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link',function (Blueprint $table){
           $table->increments('id');
           $table->string('name',50);
           $table->string('icon',50);
           $table->string('value');
            $table->integer('isdeleted')->default(0);
            $table->unsignedInteger('lang_id');
            $table->foreign('lang_id')->references('id')->on('lang');
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
        //
    }
}
