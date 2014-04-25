<?php
use Autority\user\sentry\UserInterface;
use Autority\user\userDetail\userDetailInterface;

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $user;
	protected $userDetail;

	public function __construct(UserInterface $user, userDetailInterface $userDetail){
		$this->user = $user;
		$this->userDetail = $userDetail;
		$this->beforeFilter('auth');
	}

	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = array('email'=>Input::get('email'), 'fist_name'=>Input::get('firstName'), 'last_name'=>Input::get('lastName'),
			'password'=>Input::get('password'), 'group'=>Input::get('grupo'));
		
		$result = $this->user->store($user);
		if($result['success']){
			$userDetail = array('cedula'=>Input::get('cedula'),
			'direccion'=>Input::get('direccion'), 'telefono'=>Input::get('telefono'), 
			'user_id'=>$result['id']);
			$this->userDetail->store($userDetail);
			//return $result['message'];
			return Redirect::back();
		}
		else{
			return Redirect::back();
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = array('email'=>Input::get('email'), 'fist_name'=>Input::get('firstName'), 'last_name'=>Input::get('lastName'),
			'group'=>Input::get('grupo'), 'id'=>Input::get('id'));
		
		$result = $this->user->update($user);
		if($result['success']){
			$userDetail = array('cedula'=>Input::get('cedula'),
			'direccion'=>Input::get('direccion'), 'telefono'=>Input::get('telefono'), 
			'user_id'=>$result['id']);
			$this->userDetail->update($userDetail);
			return Redirect::action('PerfilController@show', array($id));
		}
		else{
			return $result['message'];
			
		}
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{	
		$user = User::find($id);
		$result = $this->user->delete($user);
	}

}