<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmojisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create("emoji", function(Blueprint $table) {
        	$table->increments("id");
        	$table->unsignedInteger("emojiUnicode");
        	$table->string("emojiPngPath", 128);
        	$table->string("emojiDescription");
		  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("emoji");
    }
}
