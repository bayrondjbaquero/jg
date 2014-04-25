<?php

class NotasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$nota = Nota::all();
		return Response::json($nota);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$nota = Input::all();
		return Response::json($nota);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$name = Input::get('name');
		$desc = Input::get('desc');
		$date = Input::get('date');
		$nota = new Nota;
		$nota->name = $name;
		$nota->desc = $desc;
		$nota->date = $date;
		$nota->save();
		return Response::json('ok');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return "visto";
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "editado";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$name = Input::get('name');
		$desc = Input::get('desc');
		$date = Input::get('date');
		if ($nota = Nota::find($id)) {
		$nota = Nota::find($id);
		$nota->name = $name;
		$nota->desc = $desc;
		$nota->date = $date;
		$nota->save();
		return Response::json($date);
		}
		else{
		$nota = new Nota;
		$nota->name = $name;
		$nota->desc = $desc;
		$nota->date = $date;
		$nota->save();
		return Response::json($date);
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
		$nota = Nota::find($id);
		$nota->delete();
		return Response::json("Eliminado");
	}
	public function crear()
	{
		return Response::json("crear");
	}

}