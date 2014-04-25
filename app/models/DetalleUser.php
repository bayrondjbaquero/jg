<?php namespace models;
use Eloquent;

class DetalleUser extends Eloquent
{
	public static $user="detalle_users";

	public function user(){
		return $this->BelongsTo('models\User');
	}
	
}

