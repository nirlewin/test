<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiamondsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('diamonds', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('userId');$table->string('sku');$table->integer('carat');$table->integer('shapeId');$table->integer('colorId');$table->integer('reportId');$table->string('reportCode');$table->string('reportImage');$table->integer('clarityId');$table->integer('cutId');$table->integer('fluorescenceId');$table->integer('symmetryId');$table->integer('polishId');$table->integer('countryId');$table->string('image');$table->integer('listPrice');$table->integer('rapBelow');$table->integer('totalPrice');$table->string('shareImage');$table->string('video360');$table->string('video360_mp4');$table->integer('sold');$table->integer('deleted');$table->integer('published');$table->integer('position');
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
        Schema::drop('diamonds');
    }
}