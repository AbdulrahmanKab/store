<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('customer',function (Blueprint $table){
         $table->increments('id');
         $table->string('firstName',50);
         $table->string('lastName',50);
         $table->string('country',50);
         $table->string('city',50);
         $table->string('address',150);
        $table->string('paymant_type',50)->nullable();
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
        //
    }
}
