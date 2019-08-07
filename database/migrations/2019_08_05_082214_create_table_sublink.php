<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSublink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_link',function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('parent_id');
            $table->string('icon',50);
            $table->string('name',50);
            $table->string('value',50);
            $table->integer('isdeleted')->default(0);
            $table->foreign('parent_id')->references('id')->on('link');
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
