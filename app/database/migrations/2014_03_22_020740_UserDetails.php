<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserDetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		/*Schema::create('user_details', function($tabla){
			$tabla->increments('id');
			$tabla->integer('user_id')->unsigned()->nullable();
			$tabla->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$tabla->integer('cedula');
			$tabla->string('direccion', 255);
			$tabla->integer('telefono');
			$tabla->timestamps();
		});*/
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//Schema::drop('user_details');
	}

}
