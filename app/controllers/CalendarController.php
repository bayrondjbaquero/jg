<?php

class CalendarController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		return View::make('fullcalendar.calendar');
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
		
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

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
		$evento= Evento::find($id);
		$evento->title=Input::get('title');
		$evento->user_id=Input::get('user_id');
		$evento->reporte_id=Input::get('reporte_id');
		$evento->cliente_id=Input::get('cliente_id');
		$evento->color=Input::get('color');
		$evento->start=Input::get('start');
		$evento->end=Input::get('end');
		$evento->save();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

	}

	public function calendarEvent()
	{
		$eventos = Evento::all();
		return $eventos;
	}
	public function calendarUpdate()
	{
		
	}

}