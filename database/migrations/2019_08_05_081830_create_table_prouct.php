<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProuct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voidproduct
     */
    public function up()
    {
       Schema::create('product',function (Blueprint $table){
           $table->increments('id');
           $table->string('name',50);
           $table->integer('price')->nullable();
           $table->string('image',150)->nullable();
           $table->string('marka',50)->nullable();
           $table->unsignedInteger('sub_categoroy_id');
           $table->integer('isempty')->default(0);
           $table->integer('isdeleted')->default(0);
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
        Schema::dropIfExists('product');
    }
}
