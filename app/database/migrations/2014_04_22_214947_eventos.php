<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Eventos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eventos', function($tabla){
			$tabla->increments('id');
			$tabla->string('user_id', 555);
			$tabla->string('reporte_id', 555);
			$tabla->string('cliente_id', 555);
			$tabla->string('color', 555);
			$tabla->date('start', 555);
			$tabla->date('end', 555);
			$tabla->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('eventos');
	}

}
