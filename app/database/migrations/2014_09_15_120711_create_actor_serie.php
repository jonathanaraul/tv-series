<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorSerie extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actor_serie', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('actor_id')->unsigned();
			$table->integer('serie_id')->unsigned();
			$table->timestamps();
			$table->foreign('actor_id')->references('id')->on('actor')->onDelete('cascade');
			$table->foreign('serie_id')->references('id')->on('serie')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('actor_serie');
	}

}
