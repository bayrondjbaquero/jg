<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Artisan::call('migrate', ['--package'=>'cartalyst/sentry']);
//Artisan::call('migrate', ['--path'=> "app/database/migrations"]);
//Artisan::call('db:seed');

Route::get('/', function()
{
	//$this->session->destroy();
	// Session::flush();
	return View::make('inicio');
});
Route::get('logout', function()
{
	Session::flush();
	Auth::logout();
	return View::make('inicio');
});
Route::resource('/home', 'HomeController');

//calendario de eventos rutas de actualizacion, edicion, add
Route::resource('/programacion', 'CalendarController');
Route::get('/calendar', 'CalendarController@calendarEvent');
Route::post('/EventUpdate', 'CalendarController@calendarUpdate');


Route::resource('/bitacora', 'BitacoraController');
Route::resource('/pc', 'ReportesController');
Route::resource('/ups', 'ReportesController@ups');
Route::resource('/preventivo', 'ReportesController@preventivo');
Route::resource('/correctivo', 'ReportesController@correctivo');
Route::resource('/soporte', 'ReportesController@redes');
Route::resource('/soporte_tecnico', 'SoporteController');
Route::resource('/user', 'UserController');

//Usurios del Sistema y perfil personal

	Route::resource('/clientes', 'ClientesController');
	Route::get('/cl', 'ClientesController@hola');
	Route::resource('/secretaria', 'SecretariaController');
	Route::resource('/coordinadores', 'CoordinadorController');
	Route::resource('/tecnicos', 'TecnicoController');
	Route::resource('/perfil', 'PerfilController');


Route::resource('/session', 'SessionController');
Route::resource('/timeline', 'TimeLineController');

//Creacion y consulta de Bitacora (notas)
Route::resource('notas', 'NotasController');
Route::resource('crear', 'NotasController@crear');