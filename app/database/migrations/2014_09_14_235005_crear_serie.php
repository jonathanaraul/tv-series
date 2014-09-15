<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearSerie extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('serie', function(Blueprint $table)
		{
			$table->increments('id')->unique();
			$table->string('nombre',50);
			$table->string('canal_id')->unsigned();
			$table->foreign('canal_id')->references('id')->on('canal')->onDelete('cascade');;
			$table->string('horario_id')->unsigned();
			$table->foreign('horario_id')->references('id')->on('horario')->onDelete('cascade');
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
		Schema::drop('serie');
	}

}
