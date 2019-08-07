<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAdminLink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('admin_link',function (Blueprint $table){
           $table->increments('id');
           $table->unsignedInteger('admin_id');
           $table->unsignedInteger('link_id');
           $table->integer('isdeleted')->default(0);
           $table->foreign('admin_id')->references('id')->on('admin');
           $table->foreign('link_id')->references('id')->on('link');
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
