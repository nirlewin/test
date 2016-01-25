<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersnewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('usersnews', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('serialNumber');$table->string('fullName');$table->string('companyName');$table->string('email');$table->string('address');$table->integer('countryId');$table->string('phone');$table->string('image');$table->integer('agree');$table->integer('haveAds');$table->integer('notifyForNewDiamonds');
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
        Schema::drop('usersnews');
    }
}