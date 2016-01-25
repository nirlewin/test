<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('ads', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');$table->string('image');$table->string('price');$table->string('buttonText');$table->string('buttonUrl');$table->string('showLabel');$table->integer('position');
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
        Schema::drop('ads');
    }
}