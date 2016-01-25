<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('offers', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('buyerId');$table->integer('sellerId');$table->integer('diamondId');$table->integer('rapBelow');$table->integer('userPrice');$table->integer('status');
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
        Schema::drop('offers');
    }
}