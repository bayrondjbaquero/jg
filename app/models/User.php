<?php namespace models;
use Eloquent;

class User extends Eloquent {

	public function detalleuser(){
		return $this->hasOne('models\DetalleUser');
	}
	// public function getCedulaAttribute()
	// {
	//     return $this->detalleuser->cedula;
	// }
}