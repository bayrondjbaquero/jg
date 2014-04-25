<?php
use Autority\user\sentry\UserInterface;
use Autority\user\userDetail\userDetailInterface;
class SoporteController extends \BaseController {
	protected $user;
	protected $userDetail;

	public function __construct(UserInterface $user, userDetailInterface $userDetail){
		$this->user = $user;
		$this->userDetail = $userDetail;
		$this->beforeFilter('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	// public function __construct(){
	// 	$this->beforeFilter('auth');
	// }
	
	public function index()
	{	
		

		$clientes = array('clientes' => $this->user->mergeDetalleUser('clientes'));
		return View::make("reportes.soporte-tecnico", $clientes);
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
		$idcliente = Input::get('clientes');
		return $idcliente;
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
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}