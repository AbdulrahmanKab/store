<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tableproduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product',function (Blueprint $table){
            $table->unsignedInteger('lang_id');
            $table->unsignedInteger('uses_id');
            $table->foreign('lang_id')->references('id')->on('lang');
            $table->foreign('uses_id')->references('id')->on('uses');


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
