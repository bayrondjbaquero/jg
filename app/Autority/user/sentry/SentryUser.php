<?php namespace Autority\user\sentry;

use Cartalyst\Sentry\Sentry;
use models\User;
use models\DetalleUser;

class SentryUser implements UserInterface {
	
	protected $sentry;

	/**
	 * Construct a new SentryUser Object
	 */
	public function __construct(Sentry $sentry)
	{
		$this->sentry = $sentry;

		// Get the Throttle Provider
		$this->throttleProvider = $this->sentry->getThrottleProvider();

		// Enable the Throttling Feature
		$this->throttleProvider->enable();
	}

	public function store($data){
		
		$result = array();
		try {
			//Attempt to register the user. 
		$user = $this->sentry->createUser(array(
		        'email'     => $data['email'],
		        'password'  => $data['password'],
		        'first_name'  => $data['fist_name'],
		        'last_name'  => $data['last_name'],
		        'activated' => true,
		    ));
		$userGroup = $this->sentry->getGroupProvider()->findByName($data['group']);
		$user->addGroup($userGroup);
			//success!
	    	$result['success'] = true;
	    	$result['id'] = $user->id;
	    	$result['message'] = 'usuario creado';
		}
		catch (\Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
		    $result['success'] = false;
	    	$result['message'] = 'email requerido';
		}
		catch (\Cartalyst\Sentry\Users\UserExistsException $e)
		{
		    $result['success'] = false;
	    	$result['message'] = 'usuario existe';
		}

		return $result;
	}
	public function update($data){
		$result = array();
		try {
	    // Find the user using the user id
	    	$user = $this->sentry->findUserById($data['id']);
	    // Update the user details
	    	$user->email = $data['email'];
	    	$user->first_name = $data['fist_name'];
	    	$user->last_name = $data['last_name'];

	    // Update the user
	    	if($user->save()){ 
	    		$result['id'] = $user->id;
	    		$result['success'] = true;
	    	}
	    	else{
	        	
	    	}
		}
		catch (Cartalyst\Sentry\Users\UserExistsException $e){
		    $result['success'] = false;
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e){
		    $result['success'] = false;
		}
		return $result;
	}
	public function delete($data){
		try{
		    // Find the user using the user id
		    $user = $this->sentry->findUserById($data['id']);
		    // Delete the user
		    $user->delete();
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e){
		    echo 'User was not found.';
		}
	}

	public function findByid($id){
		return $this->sentry->findUserById($id);
	}

	public function userByGroup($name){
		$group = $this->sentry->findGroupByName($name);
		$users = $this->sentry->findAllUsersInGroup($group);
		return $users;
	}

	public function mergeDetalleUser($group){
		$clientes = $this->userByGroup($group);
		for ($i=0; $i < count($clientes); $i++) { 
			$Detalle = DetalleUser::where('user_id', '=', $clientes[$i]->id)->get()->toArray();
			$clientes[$i] = array_merge($Detalle[0], $clientes[$i]->toArray());
		}
		return $clientes;
	}
	public function mergeDetalleUserById($id){
		$cliente = $this->sentry->findUserById($id); 
			$Detalle = DetalleUser::where('user_id', '=', $cliente->id)->get()->toArray();
			$cliente = array_merge($Detalle[0], $cliente->toArray());
		return $cliente;
	}
}
