<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearActorSerie extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actor_serie', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('actor_id')->unsigned();
			$table->foreign('actor_id')->references('id')->on('actor_id')->onDelete('cascade');
			$table->string('serie_id')->unsigned();
			$table->foreign('serie_id')->references('id')->on('serie_id')->onDelete('cascade');
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
		Schema::drop('actor_serie');
	}

}
