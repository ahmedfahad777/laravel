<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotersEntryAndCandidatesEntryTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('voters', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('voterName');
            $table->string('voterId');
            $table->boolean('vote')->default(false);;
			$table->timestamps();
		});
        Schema::create('candidates', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('candidateName');
            $table->string('symbol');
            $table->integer('cast')->default(0);
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
		Schema::drop('voters');
        Schema::drop('candidates');
	}

}
