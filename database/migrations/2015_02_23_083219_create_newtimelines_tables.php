<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewtimelinesTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('newtimelines', function(Blueprint $table)
		{
            $table->increments('id');

            $table->string('title');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at');


		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('newtimelines');
	}

}
