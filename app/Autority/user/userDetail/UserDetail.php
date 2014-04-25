<?php namespace Autority\user\userDetail;
use models\DetalleUser;
class UserDetail implements userDetailInterface{

	public function store($data){
		$user = new DetalleUser;
		$result = array();
		foreach ($data as $key => $value) {
			$user->$key = $data[$key];
		}
		$user->save();
		if ($user) {
			$result['success']= true; 
			$result['message']= "Guardado correctamente";
		}
		else{
			$result['success']= false; 
			$result['message']= "Error al guardar";
		}
		return $result;
	}
	public function update($data){
		$result = array();
		$user = DetalleUser::where('user_id', '=' , $data['user_id'])->get();

		$userId = $user[0]->id;
		$detalle = DetalleUser::find($userId);
		foreach ($data as $key => $value) {
			$detalle->$key = $data[$key];
		}
		
		if ($detalle->save()) {
			$result['success']= true; 
			$result['message']= "Guardado correctamente";
		}
		else{
			$result['success']= false; 
			$result['message']= "Error al guardar";
		}
		return $result;
	}
}