<?php
use models\DetalleUser;
class UserSeeder extends Seeder {
	public function run()
    {
	$admin = [
		'email'       => 'admin@admin.com',
        'password'    => "admin",
        'first_name'  => 'Yamid',
        'last_name'   => 'Viloria Ortega',
        'activated'   => 1,
	];

	$adminGroup = [

		'name'        => 'Admin',
        'permissions' => array('admin' => 1),

	];

	$secretaria = [
		'email'       => 'secretaria@admin.com',
        'password'    => "secretaria",
        'first_name'  => 'Bayron',
        'last_name'   => 'Batista Baquero',
        'activated'   => 1,
	];

	$secreGroup = [

		'name'        => 'Secretarias',
        'permissions' => array('admin' => 1),

	];

	$clientes = [
		'name' => 'clientes',
		'permissions' => array(
	        "user.create" => 0,
	        "user.delete" => 0,
	        "user.view"   => 0,
	        "user.update" => 0
	    )];

	$sentryAdmin = Sentry::getUserProvider()->create($admin);
	Sentry::getGroupProvider()->create($adminGroup);
	$detalleAdmin = new DetalleUser;
	$detalleAdmin->user_id = $sentryAdmin->id;
	$detalleAdmin->save();

	$sentrySecre = Sentry::getUserProvider()->create($secretaria);
	Sentry::getGroupProvider()->create($secreGroup);
	$detalleSecre = new DetalleUser;
	$detalleSecre->user_id = $sentrySecre->id;
	$detalleSecre->save();

	Sentry::getGroupProvider()->create($clientes);

	//Relacionando usuario con grupo
	$adminUser  = Sentry::getUserProvider()->findByLogin('admin@admin.com');
    $adminGroup = Sentry::getGroupProvider()->findByName('Admin');
    $adminUser->addGroup($adminGroup);

    $secreUser  = Sentry::getUserProvider()->findByLogin('secretaria@admin.com');
    $sGroup = Sentry::getGroupProvider()->findByName('Secretarias');
    $secreUser->addGroup($sGroup);
	}
}