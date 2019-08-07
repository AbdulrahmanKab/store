<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSubCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_category',function (Blueprint $table){
            $table->increments('id');
            $table->string('name',50);
            $table->unsignedInteger('main_category_id');
            $table->integer('isdeleted')->default(0);
            $table->timestamps();
            $table->foreign('main_category_id')->references('id')->on('main_category');
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
